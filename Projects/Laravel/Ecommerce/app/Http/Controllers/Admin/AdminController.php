<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('ADMIN_LOGIN')) {
            return redirect('admin/dashboard');
        }else{
            return view('admin.login');
        }
        //return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function auth(Request $request)
    {
        $username = (!empty($request->post('email'))) ? $request->post('email') : null;
        $password = (!empty($request->post('password'))) ? $request->post('password') : null;
        // $result = Admin::where([
        //     'email' => $username,
        //     'password' => $password
        // ])->get();
        $result = Admin::where(['email' => $username])->first();
        if ($result) {
            if (Hash::check($password, $result->password)) {
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error', 'Please enter correct password');
                return redirect('admin');
            }
        }else{
            $request->session()->flash('error', 'Please enter valid credentials');
            return redirect('admin');
        }
    }

    // public function updatePassword()
    // {
    //     $result = Admin::find(1);
    //     $result->password = Hash::make('Atishkumar');
    //     $result->save();
    // }
}
