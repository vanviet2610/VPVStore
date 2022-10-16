<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        # code...
    }

    public function register(Request $request)
    {
        dd($request);
    }
}
