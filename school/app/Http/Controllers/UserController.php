<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if (!session()->has('user')) {
            return view('login');
        }
        $schools=School::all()->where('is_active',1)->count();
        $students=Student::all()->where('is_active',1)->count();
        return view('admin.index',compact('schools','students'));
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
