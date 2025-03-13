<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $result['data'] = Product::all();
        return view('admin/product', $result);
    }

    public function manage_product($id='')
    {
        if (!empty($id)) {
            $arrData = Product::where(['id' => $id])->get();
            $result['product_id'] = $arrData[0]->id;
            $result['category_id'] = $arrData[0]->category_id;
            $result['product_name'] = $arrData[0]->product_name;
            $result['product_image'] = $arrData[0]->product_image;
            $result['product_slug'] = $arrData[0]->product_slug;
            $result['product_brand'] = $arrData[0]->product_brand;
            $result['product_model'] = $arrData[0]->product_model;
            $result['product_short_description'] = $arrData[0]->product_short_description;
            $result['product_description'] = $arrData[0]->product_description;
            $result['product_keywords'] = $arrData[0]->product_keywords;
            $result['product_technical_specification'] = $arrData[0]->product_technical_specification;
            $result['product_uses'] = $arrData[0]->product_uses;
            $result['product_warranty'] = $arrData[0]->product_warranty;
            $result['product_status'] = $arrData[0]->product_status;
            $result['product_lead_time'] = $arrData[0]->product_lead_time;
            $result['tax_id'] = $arrData[0]->tax_id;
            $result['product_is_promo'] = $arrData[0]->product_is_promo;
            $result['product_is_featured'] = $arrData[0]->product_is_featured;
            $result['product_is_discounted'] = $arrData[0]->product_is_discounted;
            $result['product_is_trending'] = $arrData[0]->product_is_trending;
            $result['productsAttribute'] = DB::table('products_attribute')->where(['product_id' => $id])->get();
            $productImages = DB::table('product_images')->where(['product_id' => $id])->get();
            if (!isset($productImages[0])) {
                $result['productImages'][0]['id']  = '';
                $result['productImages'][0]['product_images']  = '';
            }else{
                $result['productImages'] = $productImages;
            }
        }else{
            $result['product_id'] = '';
            $result['category_id'] = '';
            $result['product_name'] = '';
            $result['product_image'] = '';
            $result['product_slug'] = '';
            $result['product_brand'] = '';
            $result['product_model'] = '';
            $result['product_short_description'] = '';
            $result['product_description'] = '';
            $result['product_keywords'] = '';
            $result['product_technical_specification'] = '';
            $result['product_uses'] = '';
            $result['product_warranty'] = '';
            $result['product_status'] = '';
            $result['product_lead_time'] = '';
            $result['tax_id'] = '';
            $result['product_is_promo'] = '';
            $result['product_is_featured'] = '';
            $result['product_is_discounted'] = '';
            $result['product_is_trending'] = '';
            $result['productsAttribute'][0]['id']  = '';
            $result['productsAttribute'][0]['product_id']  = '';
            $result['productsAttribute'][0]['size_id']  = '';
            $result['productsAttribute'][0]['color_id']  = '';
            $result['productsAttribute'][0]['product_attribute_sku']  = '';
            $result['productsAttribute'][0]['product_attribute_image']  = '';
            $result['productsAttribute'][0]['product_attribute_mrp']  = '';
            $result['productsAttribute'][0]['product_attribute_price']  = '';
            $result['productsAttribute'][0]['product_attribute_quantity']  = '';

            $result['productImages'][0]['id']  = '';
            $result['productImages'][0]['product_images']  = '';

        }

        $result['categoryData'] = DB::table('categories')->where(['category_status' => 'Enabled'])->get();
        $result['sizeData'] = DB::table('sizes')->where(['size_status' => 'Enabled'])->get();
        $result['colorData'] = DB::table('colors')->where(['color_status' => 'Enabled'])->get();
        $result['brandsData'] = DB::table('brands')->where(['brand_status' => 'Enabled'])->get();
        $result['taxsData'] = DB::table('taxs')->where(['tax_status' => 'Enabled'])->get();

        return view('admin/manage_product',$result);
    }

    public function manage_product_process(Request $request)
    {
        // Product Insert / update
        $product_id = (!empty($request->post('product_id'))) ? $request->post('product_id') : null;
        if (!empty($product_id)) {
            $objProduct = Product::find($product_id);
            $strMessage = 'Product updated successfully';
            $imageValidation = 'mimes:jpeg,jpg,png';
        }else{
            $objProduct = new Product();
            $strMessage = 'Product inserted successfully';
            $imageValidation = 'required|mimes:jpeg,jpg,png';
        }

        if ($request->hasFile('product_image')) {
            $productImage = (!empty($request->file('product_image'))) ? $request->file('product_image') : null;
            $imageExtention = $productImage->extension();
            $imageName = time().".".$imageExtention;
            $productImage->storeAs('/public/media',$imageName);
            $objProduct->product_image = $imageName;
            if (!empty($product_id)) {
                $arrProductsData = DB::table('products')->where(['id' => $product_id])->get();
                if (Storage::exists('/public/media/'.$arrProductsData[0]->product_image)) {
                    Storage::delete('/public/media/'.$arrProductsData[0]->product_image);
                }
            }
        }

        $request->validate([
            'product_name' => 'required',
            'product_slug' => 'required|unique:products,product_slug,'.$product_id,
            'product_image' => $imageValidation,
            'product_attribute_image.*' => 'mimes:jpeg,jpg,png',
            'product_images.*' => 'mimes:jpeg,jpg,png'
        ]);

        $objProduct->category_id = (!empty($request->post('category_id'))) ? $request->post('category_id') : null;
        $objProduct->product_name = (!empty($request->post('product_name'))) ? $request->post('product_name') : null;
        $objProduct->product_slug = (!empty($request->post('product_slug'))) ? $request->post('product_slug') : null;
        $objProduct->product_brand = (!empty($request->post('product_brand'))) ? $request->post('product_brand') : null;
        $objProduct->product_model = (!empty($request->post('product_model'))) ? $request->post('product_model') : null;
        $objProduct->product_short_description = (!empty($request->post('product_short_description'))) ? $request->post('product_short_description') : null;
        $objProduct->product_description = (!empty($request->post('product_description'))) ? $request->post('product_description') : null;
        $objProduct->product_keywords = (!empty($request->post('product_keywords'))) ? $request->post('product_keywords') : null;
        $objProduct->product_technical_specification = (!empty($request->post('product_technical_specification'))) ? $request->post('product_technical_specification') : null;
        $objProduct->product_uses = (!empty($request->post('product_uses'))) ? $request->post('product_uses') : null;
        $objProduct->product_warranty = (!empty($request->post('product_warranty'))) ? $request->post('product_warranty') : null;
        $objProduct->product_status = (!empty($request->post('product_status'))) ? $request->post('product_status') : null;
        $objProduct->product_lead_time = (!empty($request->post('product_lead_time'))) ? $request->post('product_lead_time') : null;
        $objProduct->tax_id = (!empty($request->post('tax_id'))) ? $request->post('tax_id') : null;
        $objProduct->product_is_promo = (!empty($request->post('product_is_promo'))) ? $request->post('product_is_promo') : null;
        $objProduct->product_is_featured = (!empty($request->post('product_is_featured'))) ? $request->post('product_is_featured') : null;
        $objProduct->product_is_discounted = (!empty($request->post('product_is_discounted'))) ? $request->post('product_is_discounted') : null;
        $objProduct->product_is_trending = (!empty($request->post('product_is_trending'))) ? $request->post('product_is_trending') : null;

        $objProduct->save();
        $productId = $objProduct->id;


        // Product Attribute Insert / update
        $arrProductSKUAttribute = (!empty($request->post('product_attribute_sku'))) ? $request->post('product_attribute_sku') : null;
        if (!empty($arrProductSKUAttribute)) {
            foreach ($arrProductSKUAttribute as $key => $value) {
                $productAttributeId = $request->post('product_attribute_id')[$key];
                $arrProductAttribute = [];
                $arrProductAttribute = [
                    'product_id' => $productId,
                    'size_id' => $request->post('size_id')[$key],
                    'color_id' => $request->post('color_id')[$key],
                    'product_attribute_sku' => $request->post('product_attribute_sku')[$key],
                    'product_attribute_mrp' => $request->post('product_attribute_mrp')[$key],
                    'product_attribute_price' => $request->post('product_attribute_price')[$key],
                    'product_attribute_quantity' => $request->post('product_attribute_quantity')[$key]
                ];

                if ($request->hasFile('product_attribute_image.'.$key)) {
                    $intRandomNumber = rand(00000,99999);
                    $productAttributeImage = $request->file('product_attribute_image.'.$key);
                    $imageExtention = $productAttributeImage->extension();
                    $productAttributeImageName = $intRandomNumber."-".time().".".$imageExtention;
                    $productAttributeImage->storeAs('/public/media',$productAttributeImageName);
                    $arrProductAttribute['product_attribute_image'] = $productAttributeImageName;
                    if (!empty($productAttributeId)) {
                        $arrProductAttributeImageData = DB::table('products_attribute')->where(['id' => $productAttributeId])->get();
                        if (Storage::exists('/public/media/'.$arrProductAttributeImageData[0]->product_attribute_image)) {
                            Storage::delete('/public/media/'.$arrProductAttributeImageData[0]->product_attribute_image);
                        }
                    }
                }

                if ($productAttributeId != '') {
                    DB::table('products_attribute')->where(['id' => $productAttributeId])->update($arrProductAttribute);
                }else{
                    DB::table('products_attribute')->insert($arrProductAttribute);
                }
            }
        }

        // Product Images Insert / update
        $productImagesFile = $request->file('product_images');
        if (!empty($productImagesFile)) {
            $arrProductImagesId = $request->post('product_image_id');
            foreach ($arrProductImagesId as $key => $value) {
                $arrProductImages = [];
                $arrProductImages['product_id'] = $productId;
                $productImageId = $value;
                if ($request->hasFile('product_images.'.$key)) {
                    $intRandomNumber = rand(00000,99999);
                    $productImages = $request->file('product_images.'.$key);
                    $imageExtention = $productImages->extension();
                    $productImagesName = $intRandomNumber."-".time().".".$imageExtention;
                    $productImages->storeAs('/public/media',$productImagesName);
                    $arrProductImages['product_images'] = $productImagesName;
                    if (!empty($productImageId)) {
                        $arrProductImageData = DB::table('product_images')->where(['id' => $productImageId])->get();
                        if (Storage::exists('/public/media/'.$arrProductImageData[0]->product_images)) {
                            Storage::delete('/public/media/'.$arrProductImageData[0]->product_images);
                        }
                    }
                }
                if (!empty($productImageId)) {
                        DB::table('product_images')->where(['id' => $productImageId])->update($arrProductImages);
                }else{
                        DB::table('product_images')->insert($arrProductImages);
                }
            }
        }
        $request->session()->flash('message', $strMessage);
        return redirect('admin/product');
    }

    public function delete(Request $request, $id)
    {
        if (!empty($id)) {
            $arrProductsData = DB::table('products')->where(['id' => $id])->get();
            if (Storage::exists('/public/media/'.$arrProductsData[0]->product_image)) {
                Storage::delete('/public/media/'.$arrProductsData[0]->product_image);
            }
            $model = Product::find($id);
            $result = $model->delete();
            if ($result) {
                $request->session()->flash('message', 'Product deleted successfully');
            }else{
                $request->session()->flash('message', 'Product not found, Please check');
            }
        }
        return redirect('admin/product');
    }

    public function product_attribute_delete(Request $request, $paid,$pid)
    {
        $arrProductAttributeData = DB::table('products_attribute')->where(['id' => $paid])->get();
        if (Storage::exists('/public/media/'.$arrProductAttributeData[0]->product_attribute_image)) {
            Storage::delete('/public/media/'.$arrProductAttributeData[0]->product_attribute_image);
        }
        DB::table('products_attribute')->where(['id' => $paid])->delete();
        $request->session()->flash('message', 'Product Attibute Deleted Successfully');
        return redirect('admin/product/manage_product/'.$pid);
    }

    public function product_images_delete(Request $request, $paid,$pid)
    {
        $arrProductImageData = DB::table('product_images')->where(['id' => $paid])->get();
        if (Storage::exists('/public/media/'.$arrProductImageData[0]->product_images)) {
            Storage::delete('/public/media/'.$arrProductImageData[0]->product_images);
        }
        DB::table('product_images')->where(['id' => $paid])->delete();
        $request->session()->flash('message', 'Product Image Deleted Successfully');
        return redirect('admin/product/manage_product/'.$pid);
    }

}
