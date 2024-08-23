<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Tag;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!session('user')){
            return redirect('login');
        }
        /*$products = Product::with('category')->get();*/
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        if (!session('user')){
            return redirect('login');
        }
        $tags=Tag::all();
        $categories=Category::all();
        return view('admin.product.add', compact('tags','categories'));
    }

    public function store(StoreProductRequest $request)
    {
        if (!session('user')){
            return redirect('login');
        }
        $title=$request->input('title');
        $description=$request->input('description');
        $price=$request->input('price');
        $entity=$request->input('entity');
        $category=$request->input('category');
        $tags=$request->input('tags');
        $product=Product::create([
            'title'=>$title,
            'description'=>$description,
            'price'=>$price,
            'entity'=>$entity,
            'category_id'=>$category,
        ]);
        $product->tags()->attach($tags);
        return to_route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
