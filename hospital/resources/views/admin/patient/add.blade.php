@extends('layout.app')
@section('title')
    add patient
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">افزودن بیمار</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('patient.create')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="name" class="font-semibold ml-5">: نام بیمار</label>
                            <input type="text" name="name" id="name" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('name'))
                                <p class="text-red-700">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="age" class="font-semibold ml-5">: سن</label>
                            <input type="number" name="age" id="age" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('age'))
                                <p class="text-red-700">{{$errors->first('age')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="gender" class="font-semibold ml-5">: جنسیت</label>
                            <select name="gender" id="gender" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                <option value="male">male</option>
                                <option value="female">female</option>
                            </select>
                            @if($errors->has('gender'))
                                <p class="text-red-700">{{$errors->first('gender')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="اضافه کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="hospital" class="font-semibold ml-5">: بیمارستان</label>
                            <select name="hospital" id="hospital" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @foreach($hospitals as $hospital)
                                    <option value="{{$hospital->id}}">{{$hospital->title}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('hospital'))
                                <p class="text-red-700">{{$errors->first('hospital')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="information" class="font-semibold ml-5">: توضیحات</label>
                            <textarea name="information" id="information" class="w-2/5 border border-gray-400 rounded outline-0 p-2" cols="10" rows="5"></textarea>
                            @if($errors->has('information'))
                                <p class="text-red-700">{{$errors->first('information')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
