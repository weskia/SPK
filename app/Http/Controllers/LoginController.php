<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Login.login');
    }

    public function postlogin(Request $request)
    {
       if(Auth::attempt($request->only('username','password'))){
           return redirect('/');
       }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
