<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\HomeBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeBannerController extends Controller
{
    public function index()
    {
        $result['data'] = HomeBanner::all();
        return view('admin/home_banner', $result);
    }

    public function manage_home_banner($id='')
    {
        if (!empty($id)) {
            $arrData = HomeBanner::where(['id' => $id])->get();
            $result['home_banner_id'] = $arrData[0]->id;
            $result['home_banner_name'] = $arrData[0]->home_banner_name;
            $result['home_banner_status'] = $arrData[0]->home_banner_status;
            $result['home_banner_image'] = $arrData[0]->home_banner_image;
            $result['home_banner_button_text'] = $arrData[0]->home_banner_button_text;
            $result['home_banner_button_link'] = $arrData[0]->home_banner_button_link;
        }else{
            $result['home_banner_id'] = '';
            $result['home_banner_name'] = '';
            $result['home_banner_status'] = '';
            $result['home_banner_image'] = '';
            $result['home_banner_button_text'] = '';
            $result['home_banner_button_link'] = '';
        }

        return view('admin/manage_home_banner',$result);
    }

    public function manage_home_banner_process(Request $request)
    {
        $home_banner_id = (!empty($request->post('home_banner_id'))) ? $request->post('home_banner_id') : null;

        if (!empty($home_banner_id)) {
            $objhome_banner = HomeBanner::find($home_banner_id);
            $imageValidation = 'mimes:jpeg,jpg,png';
            $strMessage = 'Banner updated successfully';
        }else{
            $objhome_banner = new HomeBanner();
            $imageValidation = 'required|mimes:jpeg,jpg,png';
            $strMessage = 'Banner inserted successfully';
        }

        $request->validate([
            'home_banner_name' => 'required|unique:home_banners,home_banner_name,'.$home_banner_id,
            'home_banner_image' => $imageValidation
        ]);

        $objhome_banner->home_banner_name = (!empty($request->post('home_banner_name'))) ? $request->post('home_banner_name') : null;
        $objhome_banner->home_banner_status = (!empty($request->post('home_banner_status'))) ? $request->post('home_banner_status') : null;
        $objhome_banner->home_banner_button_text = (!empty($request->post('home_banner_button_text'))) ? $request->post('home_banner_button_text') : null;
        $objhome_banner->home_banner_button_link = (!empty($request->post('home_banner_button_link'))) ? $request->post('home_banner_button_link') : null;
        if ($request->hasFile('home_banner_image')) {
            $randomNumber = rand(11111,99999);
            $home_bannerImage = (!empty($request->file('home_banner_image'))) ? $request->file('home_banner_image') : null;
            $imageExtention = $home_bannerImage->extension();
            $imageName = $randomNumber."-".time().".".$imageExtention;
            $home_bannerImage->storeAs('/public/media/home_banners',$imageName);
            $objhome_banner->home_banner_image = $imageName;
            if (!empty($home_banner_id)) {
                $home_bannerData = DB::table('home_banners')->where(['id' => $home_banner_id])->get();
                if (Storage::exists('/public/media/home_banners/'.$home_bannerData[0]->home_banner_image)) {
                    Storage::delete('/public/media/home_banners/'.$home_bannerData[0]->home_banner_image);
                }
            }
        }
        $objhome_banner->save();
        $request->session()->flash('message', $strMessage);
        return redirect('admin/home_banner');
    }

    public function delete(Request $request, $id)
    {
        if (!empty($id)) {
            $arrHomeBannerData = DB::table('home_banners')->where(['id' => $id])->get();
            if (Storage::exists('/public/media/home_banners/'.$arrHomeBannerData[0]->home_banner_image)) {
                Storage::delete('/public/media/home_banners/'.$arrHomeBannerData[0]->home_banner_image);
            }
            $model = HomeBanner::find($id);
            $result = $model->delete();
            if ($result) {
                $request->session()->flash('message', 'Banner deleted successfully');
            }else{
                $request->session()->flash('message', 'Banner not found, Please check');
            }
        }
        return redirect('admin/home_banner');
    }
}
