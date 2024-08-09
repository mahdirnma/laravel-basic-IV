@extends('layout.app')
@section('title')
    update student
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">ویرایش دانش آموز</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('student.edit',compact('student'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="firstname" class="font-semibold ml-5">: نام</label>
                            <input type="text" name="firstname" id="firstname" value="{{$student->firstname}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('firstname'))
                                <p class="text-red-700">{{$errors->first('firstname')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="lastname" class="font-semibold ml-5">: نام خانوادگی</label>
                            <input type="text" name="lastname" id="lastname" value="{{$student->lastname}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('lastname'))
                                <p class="text-red-700">{{$errors->first('lastname')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="age" class="font-semibold ml-5">: سن</label>
                            <input type="number" name="age" id="age" min="6" max="20" value="{{$student->age}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('age'))
                                <p class="text-red-700">{{$errors->first('age')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="ویرایش کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="gender" class="font-semibold ml-5">: جنسیت</label>
                            <select name="gender" id="gender" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                <option value="male" {{$student->gender=='male'?'selected':''}}>male</option>
                                <option value="female" {{$student->gender=='male'?'selected':''}}>female</option>
                            </select>
                            @if($errors->has('gender'))
                                <p class="text-red-700">{{$errors->first('gender')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="address" class="font-semibold ml-5">: ادرس</label>
                            <input type="text" name="address" id="address" value="{{$student->address}}" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('address'))
                                <p class="text-red-700">{{$errors->first('address')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="school" class="font-semibold ml-5">: نام مدرسه</label>
                            <select name="school" id="school" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @foreach($schools as $school)
                                    <option value={{$school->id}} {{$school->id==$student->school_id?'selected':''}}>{{$school->title}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('school'))
                                <p class="text-red-700">{{$errors->first('school')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
