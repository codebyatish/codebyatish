<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        $result['data'] = Brand::all();
        return view('admin/brand', $result);
    }

    public function manage_brand($id='')
    {
        if (!empty($id)) {
            $arrData = Brand::where(['id' => $id])->get();
            $result['brand_id'] = $arrData[0]->id;
            $result['brand_name'] = $arrData[0]->brand_name;
            $result['brand_status'] = $arrData[0]->brand_status;
            $result['brand_image'] = $arrData[0]->brand_image;
        }else{
            $result['brand_id'] = '';
            $result['brand_name'] = '';
            $result['brand_status'] = '';
            $result['brand_image'] = '';
        }

        return view('admin/manage_brand',$result);
    }

    public function manage_brand_process(Request $request)
    {
        $brand_id = (!empty($request->post('brand_id'))) ? $request->post('brand_id') : null;

        if (!empty($brand_id)) {
            $objbrand = Brand::find($brand_id);
            $imageValidation = 'mimes:jpeg,jpg,png';
            $strMessage = 'Brand updated successfully';
        }else{
            $objbrand = new Brand();
            $imageValidation = 'required|mimes:jpeg,jpg,png';
            $strMessage = 'Brand inserted successfully';
        }

        $request->validate([
            'brand_name' => 'required|unique:brands,brand_name,'.$brand_id,
            'brand_image' => $imageValidation
        ]);

        $objbrand->brand_name = (!empty($request->post('brand_name'))) ? $request->post('brand_name') : null;
        $objbrand->brand_status = (!empty($request->post('brand_status'))) ? $request->post('brand_status') : null;
        if ($request->hasFile('brand_image')) {
            $randomNumber = rand(11111,99999);
            $brandImage = (!empty($request->file('brand_image'))) ? $request->file('brand_image') : null;
            $imageExtention = $brandImage->extension();
            $imageName = $randomNumber."-".time().".".$imageExtention;
            $brandImage->storeAs('/public/media/brands',$imageName);
            $objbrand->brand_image = $imageName;
            if (!empty($brand_id)) {
                $brandData = DB::table('brands')->where(['id' => $brand_id])->get();
                if (Storage::exists('/public/media/brands/'.$brandData[0]->brand_image)) {
                    Storage::delete('/public/media/brands/'.$brandData[0]->brand_image);
                }
            }
        }
        $objbrand->save();
        $request->session()->flash('message', $strMessage);
        return redirect('admin/brand');
    }

    public function delete(Request $request, $id)
    {
        if (!empty($id)) {
            $arrBrandData = DB::table('brands')->where(['id' => $id])->get();
            if (Storage::exists('/public/media/brands/'.$arrBrandData[0]->brand_image)) {
                Storage::delete('/public/media/brands/'.$arrBrandData[0]->brand_image);
            }
            $model = Brand::find($id);
            $result = $model->delete();
            if ($result) {
                $request->session()->flash('message', 'Brand deleted successfully');
            }else{
                $request->session()->flash('message', 'brand not found, Please check');
            }
        }
        return redirect('admin/brand');
    }
}
