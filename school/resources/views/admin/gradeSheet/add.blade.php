@extends('layout.app')
@section('title')
    add grade sheet
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">افزودن کارنامه</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('gradeSheet.create',compact('student'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="firstname" class="font-semibold ml-5">: پایه</label>
                            <select name="grade" id="grade" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
{{--
                                @foreach($student->gradeSheet as $gradeSheet)
                                    {{$status=true}}
                                @endforeach
--}}
                                <option value="1">اول</option>
                                <option value="2">دوم</option>
                                <option value="3">سوم</option>
                                <option value="4">چهارم</option>
                                <option value="5">پنجم</option>
                                <option value="6">ششم</option>
                            </select>
                            @if($errors->has('grade'))
                                <p class="text-red-700">{{$errors->first('grade')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="اضافه کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="average" class="font-semibold ml-5">: معدل</label>
                            <input type="number" name="average" id="average" step="0.01" min="0" max="20" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('average'))
                                <p class="text-red-700">{{$errors->first('average')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
