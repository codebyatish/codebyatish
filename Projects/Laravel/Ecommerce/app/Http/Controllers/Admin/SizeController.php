<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $result['data'] = Size::all();
        return view('admin/size', $result);
    }

    public function manage_size($id='')
    {
        if (!empty($id)) {
            $arrData = Size::where(['id' => $id])->get();
            $result['size_id'] = $arrData[0]->id;
            $result['size'] = $arrData[0]->size;
            $result['size_status'] = $arrData[0]->size_status;
        }else{
            $result['size_id'] = '';
            $result['size'] = '';
            $result['size_status'] = '';
        }

        return view('admin/manage_size',$result);
    }

    public function manage_size_process(Request $request)
    {
        $size_id = (!empty($request->post('size_id'))) ? $request->post('size_id') : null;
        $request->validate([
            'size' => 'required|unique:sizes,size,'.$size_id
        ]);

        if (!empty($size_id)) {
            $objsize = Size::find($size_id);
            $strMessage = 'Size updated successfully';
        }else{
            $objsize = new Size();
            $strMessage = 'Size inserted successfully';
        }
        $objsize->size = (!empty($request->post('size'))) ? $request->post('size') : null;
        $objsize->size_status = (!empty($request->post('size_status'))) ? $request->post('size_status') : null;
        $objsize->save();
        $request->session()->flash('message', $strMessage);
        return redirect('admin/size');
    }

    public function delete(Request $request, $id)
    {
        if (!empty($id)) {
            $model = Size::find($id);
            $result = $model->delete();
            if ($result) {
                $request->session()->flash('message', 'Size deleted successfully');
            }else{
                $request->session()->flash('message', 'size not found, Please check');
            }
        }
        return redirect('admin/size');
    }
}
