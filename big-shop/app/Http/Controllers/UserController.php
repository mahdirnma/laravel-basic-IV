<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if (!session()->get('user')){
            return to_route('login.show');
        }
        $products = Product::all()->count();
        $categories = Category::all()->count();
        return view('admin.index',compact('products','categories'));
    }

    public function login()
    {
        return view('admin.login');
    }
    public function signin()
    {
        return view('admin.signin');
    }
}
