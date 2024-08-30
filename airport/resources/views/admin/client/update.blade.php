@extends('layout.app')
@section('title')
    update client
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">ویرایش مشتری</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('client.edit',compact('client'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="name" class="font-semibold ml-5">:نام</label>
                            <input type="text" name="name" id="name" value="{{$client->name}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('name'))
                                <p class="text-red-700">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="birth_year" class="font-semibold ml-5">: سال تولد</label>
                            <input type="number" name="birth_year" max="1403" min="1310" id="birth_year" value="{{$client->birth_year}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('birth_year'))
                                <p class="text-red-700">{{$errors->first('birth_year')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="ویرایش کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="gender" class="font-semibold ml-5">: جنسیت</label>
                            <select name="gender" id="gender" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                <option value="male" {{$client->gender=='male'?'selected':''}}>male</option>
                                <option value="female" {{$client->gender=='female'?'selected':''}}>female</option>
                            </select>
                            @if($errors->has('gender'))
                                <p class="text-red-700">{{$errors->first('gender')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
