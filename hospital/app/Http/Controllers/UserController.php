<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Patient;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $hospital=Hospital::all()->count();
        $patient=Patient::all()->count();
        return view('admin.index',compact('hospital','patient'));
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
