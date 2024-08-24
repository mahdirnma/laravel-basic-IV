<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        if (!session('user')){
            return redirect('login');
        }
        $categories = Category::all()->where('is_active',1);
        return view('admin.category.index',compact('categories'));
    }
    public function create(){
        if (!session('user')){
            return redirect('login');
        }
        return view('admin.category.add');
    }
    public function store(StoreCategoryRequest $request){
        if (!session('user')){
            return redirect('login');
        }
        $title = $request->input('title');
        $description = $request->input('description');
        $category=Category::create([
            'title'=>$title,
            'description'=>$description,
        ]);
        if($category){
            return to_route('category.index');
        }else{
            return to_route('category.create');

        }
    }
    public function edit(Category $category){
        if (!session('user')){
            return redirect('login');
        }
        return view('admin.category.update',compact('category'));
    }
    public function update(StoreCategoryRequest $request,Category $category){
        if (!session('user')){
            return redirect('login');
        }
        $title = $request->input('title');
        $description = $request->input('description');
        $status=$category->update([
            'title'=>$title,
            'description'=>$description,
        ]);
        if($status){
            return to_route('category.index');
        }else{
            return to_route('category.edit',$category);
        }
    }

    public function delete(Category $category)
    {
        if (!session('user')){
            return redirect('login');
        }
        return view('admin.category.delete',compact('category'));
    }
    public function destroy(Category $category){
        if (!session('user')){
            return redirect('login');
        }
        $status=$category->update([
            'is_active'=>0,
        ]);
        if($status){
            return to_route('category.index');
        }else{
            return to_route('category.delete',$category);
        }
    }
}
