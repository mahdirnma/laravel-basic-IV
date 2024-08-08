<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if (!session()->has('user')) {
            return view('login');
        }
        return view('admin.dashboard');
    }

    public function login()
    {
        return view('login');
    }
    public function signin()
    {
        return view('signin');
    }
}
