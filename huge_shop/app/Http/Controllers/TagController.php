<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!session()->has('user')) {
            return redirect('login');
        }
        $tags = Tag::all()->where('is_active', 1);
        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        if (!session()->has('user')) {
            return redirect('login');
        }
        return view('admin.tag.add');
    }

    public function store(StoreTagRequest $request)
    {
        if (!session()->has('user')) {
            return redirect('login');
        }
        $title=$request->input('title');
        $tag=Tag::create([
            'title'=>$title,
        ]);
        if ($tag) {
            return to_route('tag.index');
        }else{
            return to_route('tag.create');
        }
    }

    public function edit(Tag $tag)
    {
        if (!session()->has('user')) {
            return redirect('login');
        }
        return view('admin.tag.update', compact('tag'));
    }

    public function update(StoreTagRequest $request, Tag $tag)
    {
        if (!session()->has('user')) {
            return redirect('login');
        }
        $title=$request->input('title');
        $status=$tag->update([
            'title'=>$title,
        ]);
        if ($status) {
            return to_route('tag.index');
        }else{
            return to_route('tag.edit', $tag);

        }
    }

    public function delete(Tag $tag)
    {
        if (!session()->has('user')) {
            return redirect('login');
        }
        return view('admin.tag.delete', compact('tag'));
    }
    public function destroy(Tag $tag)
    {
        if (!session()->has('user')) {
            return redirect('login');
        }
        $status=$tag->update([
            'is_active'=>0,
        ]);
        if ($status) {
            return to_route('tag.index');
        }else{
            return to_route('tag.delete', $tag);
        }
    }
}
