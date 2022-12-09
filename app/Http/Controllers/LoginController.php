<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function viewLogin()
    {
        return view('guest/login');
    }

    public function login(Request $request)
    {
//        $this->validate($request, ['email' => 'required', 'password' => 'required|min:3|max:32'],
//            ['email.required'=>'Bạn chưa nhập Email',
//                'password.required'=>'Bạn chưa nhập mật khẩu',
//                'password.min'=>'Mật khẩu không được dưới 3 ký tự',
//                'password.mã'=>'Mật khẩu không được quá 32 ký tự']);
//        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
//            return redirect('/admin/home');
//        }else{
//            return redirect('/home');
//        }
        $email = $request->get('admin_email');
        $password = $request->get('admin_password');

        $rs = Auth::attempt(
            ['admin_email' => $email, 'admin_password' => $password]
        );

        if ($rs) {
            return redirect('/admin/home');
        } else {
            return redirect('/admin/home');
        }
    }
}
