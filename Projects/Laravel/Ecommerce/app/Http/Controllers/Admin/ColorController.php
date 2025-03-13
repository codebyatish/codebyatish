<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $result['data'] = Color::all();
        return view('admin/color', $result);
    }

    public function manage_color($id='')
    {
        if (!empty($id)) {
            $arrData = Color::where(['id' => $id])->get();
            $result['color_id'] = $arrData[0]->id;
            $result['color_name'] = $arrData[0]->color_name;
            $result['color_status'] = $arrData[0]->color_status;
        }else{
            $result['color_id'] = '';
            $result['color_name'] = '';
            $result['color_status'] = '';
        }

        return view('admin/manage_color',$result);
    }

    public function manage_color_process(Request $request)
    {
        $color_id = (!empty($request->post('color_id'))) ? $request->post('color_id') : null;
        $request->validate([
            'color_name' => 'required|unique:colors,color_name,'.$color_id
        ]);

        if (!empty($color_id)) {
            $objcolor = Color::find($color_id);
            $strMessage = 'Color updated successfully';
        }else{
            $objcolor = new Color();
            $strMessage = 'Color inserted successfully';
        }
        $objcolor->color_name = (!empty($request->post('color_name'))) ? $request->post('color_name') : null;
        $objcolor->color_status = (!empty($request->post('color_status'))) ? $request->post('color_status') : null;
        $objcolor->save();
        $request->session()->flash('message', $strMessage);
        return redirect('admin/color');
    }

    public function delete(Request $request, $id)
    {
        if (!empty($id)) {
            $model = Color::find($id);
            $result = $model->delete();
            if ($result) {
                $request->session()->flash('message', 'Color deleted successfully');
            }else{
                $request->session()->flash('message', 'color not found, Please check');
            }
        }
        return redirect('admin/color');
    }
}
