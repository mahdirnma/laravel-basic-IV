<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if (!session()->has('user')) {
            return redirect('login');
        }
        $products = Product::all()->where('is_active',1)->count();
        $categories = Category::all()->where('is_active',1)->count();
        return view('admin.index',compact('products','categories'));
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
