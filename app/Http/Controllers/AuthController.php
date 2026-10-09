<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //login page
    public function login()
    {
        return view('auths.login');

    }
    //forgot password page
    public function forgot()
    {   
        return view('auths.forgot');
    }
    // register page
    public function register()
    {
        return view('auths.register');
}
public function website()
    {
        return view('website.home');
    }
}
