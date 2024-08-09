@extends('layout.app')
@section('title')
    students
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{--{{route('school.add')}}--}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن مدرسه +</a>
                <h2 class="text-xl">مدرسه ها</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">مشاهده کارنامه ها</td>
                        <td class="text-center">نام مدرسه</td>
                        <td class="text-center">آدرس</td>
                        <td class="text-center">جنسیت</td>
                        <td class="text-center">سن</td>
                        <td class="text-center">نام خانوادگی</td>
                        <td class="text-center">نام</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('school.delete',compact('school'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{--{{route('school.update',compact('school'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{--{{route('school.update',compact('school'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">grade sheets</button>
                                </form>
                            </td>
                            <td class="text-center">{{$student->school->title}}</td>
                            <td class="text-center">{{$student->address}}</td>
                            <td class="text-center">{{$student->gender}}</td>
                            <td class="text-center">{{$student->age}}</td>
                            <td class="text-center">{{$student->lastname}}</td>
                            <td class="text-center">{{$student->firstname}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
