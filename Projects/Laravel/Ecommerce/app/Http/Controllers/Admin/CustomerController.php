<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $result['data'] = Customer::all();
        return view('admin/customer', $result);
    }

    public function show($id='')
    {
        if (!empty($id)) {
            $arrCustomerData = Customer::where(['id' => $id])->get();
            $result['customer_list'] = $arrCustomerData[0];
            return view('admin/show_customer',$result);
        }

    }

    // public function manage_customer_process(Request $request)
    // {
    //     $customer_id = (!empty($request->post('customer_id'))) ? $request->post('customer_id') : null;
    //     $request->validate([
    //         'customer_name' => 'required|unique:customers,customer_name,'.$customer_id
    //     ]);

    //     if (!empty($customer_id)) {
    //         $objcustomer = Customer::find($customer_id);
    //         $strMessage = 'Customer updated successfully';
    //     }else{
    //         $objcustomer = new Customer();
    //         $strMessage = 'Customer inserted successfully';
    //     }
    //     $objcustomer->customer_name = (!empty($request->post('customer_name'))) ? $request->post('customer_name') : null;
    //     $objcustomer->customer_value = (!empty($request->post('customer_value'))) ? $request->post('customer_value') : null;
    //     $objcustomer->customer_status = (!empty($request->post('customer_status'))) ? $request->post('customer_status') : null;
    //     $objcustomer->save();
    //     $request->session()->flash('message', $strMessage);
    //     return redirect('admin/customer');
    // }

    public function status(Request $request, $status, $id)
    {
        if (!empty($id)) {
            $model = Customer::find($id);
            $model->customer_status = $status;
            $result = $model->save();
            if ($result) {
                $request->session()->flash('message', 'Customer status updated successfully');
            }else{
                $request->session()->flash('message', 'Customer not found, Please check');
            }
        }
        return redirect('admin/customer');
    }
}
