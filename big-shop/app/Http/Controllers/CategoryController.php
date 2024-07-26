<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function add()
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.category.add');
    }

    public function create(StoreCategoryRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title = $request->input('title');
        $description = $request->input('description');
        $category=Category::create([
            'title' => $title,
            'description' => $description
        ]);
        if ($category) {
            return to_route('category.index');
        }
    }

    public function update(Category $category)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.category.update',compact('category'));
    }

    public function edit(Category $category, StoreCategoryRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title = $request->input('title');
        $description = $request->input('description');
        $status = $category->update([
            'title' => $title,
            'description' => $description
        ]);
        if ($status) {
            return to_route('category.index');
        }else{
            return to_route('category.update');
        }
    }
}
