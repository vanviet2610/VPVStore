<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function showLoginForm()
    {
        return view('layout.authencation.login');
    }

    public function showRegister()
    {
        return view('layout.authencation.register');
    }

    public function login(Request $req)
    {
    }

    public function register(Request $req)
    {
        $rule =  [
            'email' => 'bail|required|email|unique:users,email',
            'password' => 'bail|required|min:6|max:100',
            're_password' => 'bail|required|min:6|max:100|same:password',
        ];
        $validation =   Validator::make($req->all(), $rule, [
            'email.required' => 'Vui lòng nhập địa chỉ email mà bạn muốn đăng ký',
            'email.unique' => 'email này đã tồn tại',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'mật khẩu không được nhỏ hơn 6 ký tự',
            'password.max' => 'mật khẩu không được lớn hơn 100 ký tự',
            're_password.required' => 'Nhập lại mật khẩu không được để trống',
            're_password.min' => 'Nhập mật khẩu không được nhỏ hơn 6 ký tự',
            're_password.max' => 'Nhập mật khẩu không được lớn hơn 100 ký tự',
            're_password.same' => 'Mật khẩu nhập lại không trùng với mật khẩu',
        ]);
        if ($validation->fails()) {
            return redirect('register')->withErrors($validation,'register');
        }
    }
}
