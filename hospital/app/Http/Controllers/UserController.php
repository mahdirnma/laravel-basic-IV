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
        $hospital=Hospital::all()->where('is_active',1)->count();
        $patient=Patient::all()->where('is_active',1)->count();
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
