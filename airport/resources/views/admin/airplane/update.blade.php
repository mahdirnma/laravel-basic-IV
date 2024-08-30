@extends('layout.app')
@section('title')
    update airplane
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">ویرایش هواپیما</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('airplane.edit',compact('airplane'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="flight_code" class="font-semibold ml-5">:شماره پرواز</label>
                            <input type="text" name="flight_code" id="flight_code" value="{{$airplane->flight_code}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('flight_code'))
                                <p class="text-red-700">{{$errors->first('flight_code')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="capacity" class="font-semibold ml-5">: ظرفیت</label>
                            <input type="number" name="capacity" max="50" min="10" id="capacity" value="{{$airplane->capacity}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('capacity'))
                                <p class="text-red-700">{{$errors->first('capacity')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="ویرایش کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="type" class="font-semibold ml-5">: نوع هواپیما</label>
                            <select name="type" id="type" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                <option value="economy" {{$airplane->type=='economy'?'selected':''}}>economy</option>
                                <option value="first class" {{$airplane->type=='first class'?'selected':''}}>first class</option>
                            </select>
                            @if($errors->has('type'))
                                <p class="text-red-700">{{$errors->first('type')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
