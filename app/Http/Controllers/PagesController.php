<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home' );
       }

    public function register(){
        return view('register');
       }

    public function login(){
        return view('login');
       }

    public function dashboard(){
        return view('user/dashboard');
    }
    public function forgotpassword(){
        return view('forgot_passwod');
    }
    public function resetpassword(){
        return view('reset_password');
    }
    public function adminlogin(){
        return view('admin/auth/login');
    }
}