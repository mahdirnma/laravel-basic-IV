@extends('layout.app')
@section('title')
    add prescription
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">افزودن نسخه</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('prescription.create')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: نام نسخه</label>
                            <input type="text" name="title" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('title'))
                                <p class="text-red-700">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="description" class="font-semibold ml-5">: توضیحات</label>
                            <textarea name="description" id="description" class="w-2/5 border border-gray-400 rounded outline-0 p-2" cols="10" rows="5"></textarea>
                            @if($errors->has('description'))
                                <p class="text-red-700">{{$errors->first('description')}}</p>
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
                            <label for="patient" class="font-semibold ml-5">: بیمار</label>
                            <select name="patient" id="patient" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @foreach($patients as $patient)
                                    <option value="{{$patient->id}}">{{$patient->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('patient'))
                                <p class="text-red-700">{{$errors->first('patient')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
