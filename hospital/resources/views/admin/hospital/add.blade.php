@extends('layout.app')
@section('title')
    add hospital
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">افزودن بیمارستان</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('hospital.create')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: نام بیمارستان</label>
                            <input type="text" name="title" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('title'))
                                <p class="text-red-700">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="city" class="font-semibold ml-5">: شهر بیمارستان</label>
                            <input type="text" name="city" id="city" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('city'))
                                <p class="text-red-700">{{$errors->first('city')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="zone" class="font-semibold ml-5">: منطقه</label>
                            <input type="number" name="zone" id="zone" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('zone'))
                                <p class="text-red-700">{{$errors->first('zone')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="اضافه کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="address" class="font-semibold ml-5">: ادرس</label>
                            <input type="text" name="address" id="address" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('address'))
                                <p class="text-red-700">{{$errors->first('address')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="chairman" class="font-semibold ml-5">: رِئیس بیمارستان</label>
                            <input type="text" name="chairman" id="chairman" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('chairman'))
                                <p class="text-red-700">{{$errors->first('chairman')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="range" class="font-semibold ml-5">: نوع بیمارستان</label>
                            <select name="range" id="range" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                <option value="general">general</option>
                                <option value="specialized">specialized</option>
                            </select>
                            @if($errors->has('range'))
                                <p class="text-red-700">{{$errors->first('range')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="speciality" class="font-semibold ml-5">: حیطه تخصصی بیمارستان*</label>
                            <input type="text" name="speciality" id="speciality" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('speciality'))
                                <p class="text-red-700">{{$errors->first('speciality')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
