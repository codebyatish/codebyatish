<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index()
    {
        $result['data'] = Tax::all();
        return view('admin/tax', $result);
    }

    public function manage_tax($id='')
    {
        if (!empty($id)) {
            $arrData = Tax::where(['id' => $id])->get();
            $result['tax_id'] = $arrData[0]->id;
            $result['tax_name'] = $arrData[0]->tax_name;
            $result['tax_value'] = $arrData[0]->tax_value;
            $result['tax_status'] = $arrData[0]->tax_status;
        }else{
            $result['tax_id'] = '';
            $result['tax_name'] = '';
            $result['tax_value'] = '';
            $result['tax_status'] = '';
        }

        return view('admin/manage_tax',$result);
    }

    public function manage_tax_process(Request $request)
    {
        $tax_id = (!empty($request->post('tax_id'))) ? $request->post('tax_id') : null;
        $request->validate([
            'tax_name' => 'required|unique:taxs,tax_name,'.$tax_id
        ]);

        if (!empty($tax_id)) {
            $objtax = Tax::find($tax_id);
            $strMessage = 'Tax updated successfully';
        }else{
            $objtax = new Tax();
            $strMessage = 'Tax inserted successfully';
        }
        $objtax->tax_name = (!empty($request->post('tax_name'))) ? $request->post('tax_name') : null;
        $objtax->tax_value = (!empty($request->post('tax_value'))) ? $request->post('tax_value') : null;
        $objtax->tax_status = (!empty($request->post('tax_status'))) ? $request->post('tax_status') : null;
        $objtax->save();
        $request->session()->flash('message', $strMessage);
        return redirect('admin/tax');
    }

    public function delete(Request $request, $id)
    {
        if (!empty($id)) {
            $model = Tax::find($id);
            $result = $model->delete();
            if ($result) {
                $request->session()->flash('message', 'Tax deleted successfully');
            }else{
                $request->session()->flash('message', 'tax not found, Please check');
            }
        }
        return redirect('admin/tax');
    }
}
