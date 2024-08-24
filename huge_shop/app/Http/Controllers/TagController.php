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
        $tags = Tag::all();
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
        }
    }

    public function destroy(Tag $tag)
    {
        //
    }
}
