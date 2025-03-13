<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $result['data'] = Category::all();
        return view('admin/category', $result);
    }

    public function manage_category($id='')
    {
        $query = Category::query();
        if (!empty($id)) {
            $arrData = Category::where(['id' => $id])->get();
            $result['category_id'] = $arrData[0]->id;
            $result['category_name'] = $arrData[0]->category_name;
            $result['category_slug'] = $arrData[0]->category_slug;
            $result['category_parent_id'] = $arrData[0]->category_parent_id;
            $result['category_image'] = $arrData[0]->category_image;
            $result['category_status'] = $arrData[0]->category_status;
            $result['category_description'] = $arrData[0]->category_description;
            $query = $query->where([
                ['category_status','Enabled'],
                ['id','!=',$arrData[0]->id]
            ]);
        }else{
            $result['category_id'] = '';
            $result['category_name'] = '';
            $result['category_slug'] = '';
            $result['category_parent_id'] = '';
            $result['category_image'] = '';
            $result['category_status'] = '';
            $result['category_description'] = '';
            $query = $query->where([
                ['category_status','Enabled']
            ]);
        }

        $result['categoryData'] = $query->get();
        return view('admin/manage_category',$result);
    }

    public function manage_category_process(Request $request)
    {
        $category_id = (!empty($request->post('category_id'))) ? $request->post('category_id') : null;
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories,category_slug,'.$category_id,
            'category_image' => 'mimes:jpeg,jpg,png'
        ]);

        if (!empty($category_id)) {
            $objCategory = Category::find($category_id);
            $strMessage = 'Category updated successfully';
        }else{
            $objCategory = new Category();
            $strMessage = 'Category inserted successfully';
        }
        $objCategory->category_name = (!empty($request->post('category_name'))) ? $request->post('category_name') : null;
        $objCategory->category_slug = (!empty($request->post('category_slug'))) ? $request->post('category_slug') : null;
        $objCategory->category_parent_id = (!empty($request->post('category_parent_id'))) ? $request->post('category_parent_id') : null;
        $objCategory->category_status = (!empty($request->post('category_status'))) ? $request->post('category_status') : null;
        $objCategory->category_description = (!empty($request->post('category_description'))) ? $request->post('category_description') : null;
        if ($request->hasFile('category_image')) {
            $intRandomNumber = rand(00000,99999);
            $category_image = $request->file('category_image');
            $imageExtention = $category_image->extension();
            $categoryImageName = $intRandomNumber."-".time().".".$imageExtention;
            $category_image->storeAs('/public/media/category',$categoryImageName);
            $objCategory->category_image = $categoryImageName;
            if (!empty($category_id)) {
                $categoryeData = DB::table('categories')->where(['id' => $category_id])->get();
                if (Storage::exists('/public/media/category/'.$categoryeData[0]->category_image)) {
                    Storage::delete('/public/media/category/'.$categoryeData[0]->category_image);
                }
            }
        }
        $objCategory->save();
        $request->session()->flash('message', $strMessage);
        return redirect('admin/category');
    }

    public function delete(Request $request, $id)
    {
        if (!empty($id)) {
            $arrCategoryeData = DB::table('categories')->where(['id' => $id])->get();
            if (Storage::exists('/public/media/category/'.$arrCategoryeData[0]->category_image)) {
                Storage::delete('/public/media/category/'.$arrCategoryeData[0]->category_image);
            }
            $model = Category::find($id);
            $result = $model->delete();
            if ($result) {
                $request->session()->flash('message', 'Category deleted successfully');
            }else{
                $request->session()->flash('message', 'Category not found, Please check');
            }
        }
        return redirect('admin/category');
    }
}
