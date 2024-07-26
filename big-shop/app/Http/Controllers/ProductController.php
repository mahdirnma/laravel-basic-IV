<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $products = Product::with('category')->with('picture')->where('is_active',1)->get();
        return view('admin.product.index', compact('products'));
    }

    public function add()
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }

        $categories = Category::all();
        return view('admin.product.add', compact('categories'));
    }

    public function create(StoreProductRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $entity= $request->input('entity');
        $category= $request->input('category');
        $main_pic= $request->input('main_pic');
        $pic1= $request->input('pic1');
        $pic2= $request->input('pic2');

        $product=Product::create([
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'entity' => $entity,
            'category_id' => $category,
        ]);
        $product->picture()->create([
            'main_picture' => $main_pic,
            'picture_1' => $pic1,
            'picture_2' => $pic2
        ]);
        return to_route('product.index');
    }
    public function update(Product $product)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $categories = Category::all();
//        $product2=$product->with('category')->with('picture');
        return view('admin.product.update', compact('product','categories'));
    }

    public function edit(StoreProductRequest $request, Product $product)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $entity= $request->input('entity');
        $category= $request->input('category');
        $main_pic= $request->input('main_pic');
        $pic1= $request->input('pic1');
        $pic2= $request->input('pic2');

        $product->update([
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'entity' => $entity,
            'category_id' => $category,
        ]);
        $product->picture()->update([
            'main_picture' => $main_pic,
            'picture_1' => $pic1,
            'picture_2' => $pic2
        ]);
        return to_route('product.index');
    }

    public function delete(Product $product)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.product.delete', compact('product'));
    }
    public function remove(Product $product){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $product->update([
            'is_active' => 0
        ]);
        return to_route('product.index');
    }
}
