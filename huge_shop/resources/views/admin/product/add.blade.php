@extends('layout.app')
@section('title')
    add product
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">افزودن محصول</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('product.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: نام محصول</label>
                            <input type="text" name="title" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('title'))
                                <p class="text-red-700">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="description" class="font-semibold ml-5">: توضیحات</label>
                            <textarea name="description" id="description" cols="25" rows="5" class="rounded outline-0 p-2 border border-gray-400"></textarea>
                            @if($errors->has('description'))
                                <p class="text-red-700">{{$errors->first('description')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="price" class="font-semibold ml-5">: قیمت</label>
                            <input type="number" name="price" id="price" min="1000" step="1000" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('price'))
                                <p class="text-red-700">{{$errors->first('price')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="اضافه کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="entity" class="font-semibold ml-5">: موجودی</label>
                            <select name="entity" id="entity" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                            @if($errors->has('entity'))
                                <p class="text-red-700">{{$errors->first('entity')}}</p>
                            @endif
                        </div>
                         <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="category" class="font-semibold ml-5">: نام دسته بندی</label>
                            <select name="category" id="category" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @foreach($categories as $category)
                                    <option value={{$category->id}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <p class="text-red-700">{{$errors->first('category')}}</p>
                            @endif
                        </div>
                         <div class="w-5/6 h-auto flex flex-row-reverse pt-4 mb-6">
                            <label for="" class="font-semibold ml-10">: تگ ها</label>
                             @foreach($tags as $tag)
                                 <label for="{{$tag->title}}" class="font-semibold cursor-pointer select-none">{{$tag->title}}</label>
                                 <input type="checkbox" name="tags[]" id="{{$tag->title}}" value="{{$tag->id}}" class="ml-5 mr-1 cursor-pointer">
                             @endforeach
                            @if($errors->has('tag'))
                                <p class="text-red-700">{{$errors->first('tag')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
