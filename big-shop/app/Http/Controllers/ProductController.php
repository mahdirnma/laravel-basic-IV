<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->with('picture')->where('is_active',1)->get();
        return view('admin.product.index', compact('products'));
    }
}
