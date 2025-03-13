<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $result['home_banners'] = DB::table('home_banners')->where(['home_banner_status' => 'Enabled'])->get();
        $result['home_categories'] = DB::table('categories')->where(['category_status' => 'Enabled'])->get();

        foreach ($result['home_categories'] as $home_categories) {
            $result['home_products'][$home_categories->id] = DB::table('products')->where(['category_id' => $home_categories->id, 'product_status' => 'Enabled'])->get();

            foreach ($result['home_products'][$home_categories->id] as $home_products) {
                $result['home_product_attributes'][$home_products->id] = DB::table('products_attribute')
                                                ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
                                                ->leftJoin('colors','colors.id','=','products_attribute.color_id')
                                                ->where(['products_attribute.product_id' => $home_products->id])
                                                ->get();
            }
        }


        $result['home_featured_products'] = DB::table('products')->where(['product_is_featured' => 1])->get();
        foreach ($result['home_featured_products'] as $home_featured_products) {
            $result['home_featured_product_attributes'][$home_featured_products->id] = DB::table('products_attribute')
                                            ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
                                            ->leftJoin('colors','colors.id','=','products_attribute.color_id')
                                            ->where(['products_attribute.product_id' => $home_featured_products->id])
                                            ->get();
        }
        $result['home_trending_products'] = DB::table('products')->where(['product_is_trending' => 1])->get();
        foreach ($result['home_trending_products'] as $home_trending_products) {
            $result['home_trending_product_attributes'][$home_trending_products->id] = DB::table('products_attribute')
                                            ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
                                            ->leftJoin('colors','colors.id','=','products_attribute.color_id')
                                            ->where(['products_attribute.product_id' => $home_trending_products->id])
                                            ->get();
        }
        $result['home_discounted_products'] = DB::table('products')->where(['product_is_discounted' => 1])->get();
        foreach ($result['home_discounted_products'] as $home_discounted_products) {
            $result['home_discounted_product_attributes'][$home_discounted_products->id] = DB::table('products_attribute')
                                            ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
                                            ->leftJoin('colors','colors.id','=','products_attribute.color_id')
                                            ->where(['products_attribute.product_id' => $home_discounted_products->id])
                                            ->get();
        }

        $result['home_brands'] = DB::table('brands')->where(['brand_status' => 'Enabled'])->get();
        return view('front.index',$result);
    }


    public function product(Request $request,$slug)
    {
        $result['products'] = DB::table('products')->where(['product_slug' => $slug, 'product_status' => 'Enabled'])->get();
        foreach ($result['products'] as $product) {
            $result['product_attributes'][$product->id] = DB::table('products_attribute')
                                        ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
                                        ->leftJoin('colors','colors.id','=','products_attribute.color_id')
                                        ->where(['products_attribute.product_id' => $product->id])
                                        ->get();
        }

        foreach ($result['products'] as $product) {
            $result['product_images'] = DB::table('product_images')
                                        ->where(['product_id' => $product->id])
                                        ->get();
        }

        $result['related_products'] = DB::table('products')
                                        ->where(['category_id' => $product->category_id])
                                        ->where('product_slug','!=',$product->product_slug)
                                        ->where(['product_status' => 'Enabled'])
                                        ->get();

        foreach ($result['related_products'] as $related_products) {
            $result['related_product_attributes'][$related_products->id] = DB::table('products_attribute')
                                                ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
                                                ->leftJoin('colors','colors.id','=','products_attribute.color_id')
                                                ->where(['products_attribute.product_id' => $related_products->id])
                                                ->get();
        }

        return view('front.product',$result);
    }

    public function add_to_cart(Request $request)
    {
        $strMessage = '';
        if ($request->session()->has('FRONT_USER_LOGIN')) {
            $userId = $request->session()->has('FRONT_USER_LOGIN');
            $userType = "Registered";
        }else{
            $userId = getUserTemparoryId();
            $userType = "Non-Registered";
        }

        $size = $request->post('size_id');
        $colorName = $request->post('color_id');
        $productId = $request->post('product_id');
        $productQuantity = $request->post('qty');

        $result = DB::table('products_attribute')
                                                ->select('products_attribute.id')
                                                ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
                                                ->leftJoin('colors','colors.id','=','products_attribute.color_id')
                                                ->where(['products_attribute.product_id' => $productId])
                                                ->where(['sizes.size' => $size])
                                                ->where(['colors.color_name' => $colorName])
                                                ->get();
        $productAttributeId = $result[0]->id;
        $checkInCart = DB::table('cart')
                                    ->where(['user_id' => $userId])
                                    ->where(['user_type' => $userType])
                                    ->where(['product_id' => $productId])
                                    ->where(['product_attribute_id' => $productAttributeId])
                                    ->get();

        if (isset($checkInCart[0])) {
            $cartId = $checkInCart[0]->id;
            if ($productQuantity == 0) {
                $result = DB::table('cart')->where(['id' => $cartId])->delete();
                $resultMsg = 'Cart Item Removed Successfully';
            } else {
                $result = DB::table('cart')->where(['id' => $cartId])->update(['product_quantity' => $productQuantity]);
                $resultMsg = 'Cart Updated Successfully';
            }
            $strMessage = ($result) ? $resultMsg : 'Error or nothing to update';
        }else{
            $insertResultId = DB::table('cart')->insertGetId([
                'user_id' => $userId,
                'product_id' => $productId,
                'product_attribute_id' => $productAttributeId,
                'user_type' => $userType,
                'product_quantity' => $productQuantity,
                'added_on' => date('Y-m-d h:i:s')
            ]);
            $strMessage = ($insertResultId) ? 'Record Inserted Successfully' : 'Error In Cart Insert';
        }

        $result = DB::table('cart')
        ->leftJoin('products','products.id','=','cart.product_id')
        ->leftJoin('products_attribute','products_attribute.id','=','cart.product_attribute_id')
        ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
        ->leftJoin('colors','colors.id','=','products_attribute.color_id')
        ->where(['user_id' => $userId])
        ->where(['user_type' => $userType])
        ->select('cart.product_quantity','products.product_name','products.product_image','products.product_slug','sizes.size','colors.color_name','products_attribute.product_attribute_price','products.id as product_id','products_attribute.id as product_attribute_id','products_attribute.product_attribute_image')
        ->get();

        return response()->json(['strMessage' => $strMessage, 'itemResult' => $result, 'itemCount' => count($result)]);
    }

    public function cart(Request $request)
    {
        if ($request->session()->has('FRONT_USER_LOGIN')) {
            $userId = $request->session()->has('FRONT_USER_LOGIN');
            $userType = "Registered";
        }else{
            $userId = getUserTemparoryId();
            $userType = "Non-Registered";
        }
        $result['cart_items'] = DB::table('cart')
        ->leftJoin('products','products.id','=','cart.product_id')
        ->leftJoin('products_attribute','products_attribute.id','=','cart.product_attribute_id')
        ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
        ->leftJoin('colors','colors.id','=','products_attribute.color_id')
        ->where(['user_id' => $userId])
        ->where(['user_type' => $userType])
        ->select('cart.product_quantity','products.product_name','products.product_image','products.product_slug','sizes.size','colors.color_name','products_attribute.product_attribute_price','products.id as product_id','products_attribute.id as product_attribute_id','products_attribute.product_attribute_image')
        ->get();
        return view('front.cart',$result);
    }
}
