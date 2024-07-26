@extends('layout.app')
@section('title')
    update category
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">ویرایش دسته بندی</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('category.edit',compact('category'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-full h-auto flex flex-row-reverse justify-start pt-4 mb-10">
                            <label for="title" class="font-semibold ml-5">: نام دسته</label>
                            <input type="text" name="title" id="title" value="{{$category->title}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('title'))
                                <p class="text-red-700">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="w-full h-auto flex flex-row-reverse justify-start pt-4 mb-4">
                            <label for="title" class="font-semibold ml-5">: توضیحات دسته</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="rounded outline-0 p-2 border border-gray-400">
                                {{$category->description}}
                            </textarea>
                            @if($errors->has('description'))
                                <p class="text-red-700">{{$errors->first('description')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="ویرایش کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                </form>
            </div>
    </div>
@endsection
