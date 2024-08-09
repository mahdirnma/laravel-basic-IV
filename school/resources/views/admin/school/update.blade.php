@extends('layout.app')
@section('title')
    update school
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">ویرایش مدرسه</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('school.edit',compact('school'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: نام مدرسه</label>
                            <input type="text" name="title" id="title" value="{{$school->title}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('title'))
                                <p class="text-red-700">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="city" class="font-semibold ml-5">: شهر</label>
                            <input type="text" name="city" id="city" value="{{$school->city}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('city'))
                                <p class="text-red-700">{{$errors->first('city')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="ویرایش کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="address" class="font-semibold ml-5">: ادرس</label>
                            <input type="text" name="address" id="address" value="{{$school->address}}" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('address'))
                                <p class="text-red-700">{{$errors->first('address')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="telephone" class="font-semibold ml-5">: شماره تماس مدرسه</label>
                            <input type="text" name="telephone" id="telephone" value="{{$school->telephone}}" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('telephone'))
                                <p class="text-red-700">{{$errors->first('telephone')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="type" class="font-semibold ml-5">: نوع مدرسه</label>
                            <select name="type" id="type" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                <option value="general" {{$school->type=='general'?'selected':''}}>general</option>
                                <option value="specialized" {{$school->type=='specialized'?'selected':''}}>specialized</option>
                            </select>
                            @if($errors->has('type'))
                                <p class="text-red-700">{{$errors->first('range')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
