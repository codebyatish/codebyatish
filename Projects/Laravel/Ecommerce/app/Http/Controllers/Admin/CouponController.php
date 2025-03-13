<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $result['data'] = Coupon::all();
        return view('admin/coupon', $result);
    }

    public function manage_coupon($id='')
    {
        if (!empty($id)) {
            $arrData = coupon::where(['id' => $id])->get();
            $result['coupon_id'] = $arrData[0]->id;
            $result['coupon_title'] = $arrData[0]->coupon_title;
            $result['coupon_code'] = $arrData[0]->coupon_code;
            $result['coupon_value'] = $arrData[0]->coupon_value;
            $result['coupon_type'] = $arrData[0]->coupon_type;
            $result['coupon_minimum_order_amount'] = $arrData[0]->coupon_minimum_order_amount;
            $result['coupon_is_one_time'] = $arrData[0]->coupon_is_one_time;
            $result['coupon_status'] = $arrData[0]->coupon_status;
        }else{
            $result['coupon_id'] = '';
            $result['coupon_title'] = '';
            $result['coupon_code'] = '';
            $result['coupon_value'] = '';
            $result['coupon_type'] = '';
            $result['coupon_minimum_order_amount'] = '';
            $result['coupon_is_one_time'] = '';
            $result['coupon_status'] = '';
        }

        return view('admin/manage_coupon',$result);
    }

    public function manage_coupon_process(Request $request)
    {
        $coupon_id = (!empty($request->post('coupon_id'))) ? $request->post('coupon_id') : null;
        $request->validate([
            'coupon_title' => 'required',
            'coupon_code' => 'required|unique:coupons,coupon_code,'.$coupon_id,
            'coupon_value' => 'required',
        ]);

        if (!empty($coupon_id)) {
            $objcoupon = Coupon::find($coupon_id);
            $strMessage = 'Coupon updated successfully';
        }else{
            $objcoupon = new Coupon();
            $strMessage = 'Coupon inserted successfully';
        }
        $objcoupon->coupon_title = (!empty($request->post('coupon_title'))) ? $request->post('coupon_title') : null;
        $objcoupon->coupon_code = (!empty($request->post('coupon_code'))) ? $request->post('coupon_code') : null;
        $objcoupon->coupon_value = (!empty($request->post('coupon_value'))) ? $request->post('coupon_value') : null;
        $objcoupon->coupon_type = (!empty($request->post('coupon_type'))) ? $request->post('coupon_type') : null;
        $objcoupon->coupon_minimum_order_amount = (!empty($request->post('coupon_minimum_order_amount'))) ? $request->post('coupon_minimum_order_amount') : null;
        $objcoupon->coupon_is_one_time = (!empty($request->post('coupon_is_one_time'))) ? $request->post('coupon_is_one_time') : null;
        $objcoupon->coupon_status = (!empty($request->post('coupon_status'))) ? $request->post('coupon_status') : null;
        $objcoupon->save();
        $request->session()->flash('message', $strMessage);
        return redirect('admin/coupon');
    }

    public function delete(Request $request, $id)
    {
        if (!empty($id)) {
            $model = coupon::find($id);
            $result = $model->delete();
            if ($result) {
                $request->session()->flash('message', 'Coupon deleted successfully');
            }else{
                $request->session()->flash('message', 'coupon not found, Please check');
            }
        }
        return redirect('admin/coupon');
    }
}
