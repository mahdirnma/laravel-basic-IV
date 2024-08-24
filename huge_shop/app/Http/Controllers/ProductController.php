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
        $products = Product::all()->where('is_active',1);
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
        $status=$product->tags()->attach($tags);
        if ($status){
            return to_route('product.index');
        }else{
            return to_route('product.create');
        }
    }

    public function edit(Product $product)
    {
        if (!session('user')){
            return redirect('login');
        }
        $categories=Category::all();
        return view('admin.product.update', compact('product','categories'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        if (!session('user')){
            return redirect('login');
        }
        $title=$request->input('title');
        $description=$request->input('description');
        $price=$request->input('price');
        $entity=$request->input('entity');
        $category=$request->input('category');
        $status=$product->update([
            'title'=>$title,
            'description'=>$description,
            'price'=>$price,
            'entity'=>$entity,
            'category_id'=>$category,
        ]);
        if ($status){
            return to_route('product.index');
        }else{
            return to_route('product.edit',$product);
        }
    }

    public function delete(Product $product)
    {
        if (!session('user')){
            return redirect('login');
        }
        return view('admin.product.delete', compact('product'));
    }

    public function destroy(Product $product)
    {
        if (!session('user')){
            return redirect('login');
        }
        $status=$product->update([
            'is_active'=>0
        ]);
        if ($status){
            return to_route('product.index');
        }else{
            return to_route('product.delete',$product);
        }
    }
}
