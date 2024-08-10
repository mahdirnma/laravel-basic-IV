@extends('layout.app')
@section('title')
    grade sheets
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{--{{route('student.add')}}--}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن کارنامه +</a>
                <h2 class="text-xl">{{$student->firstname}} {{$student->lastname}} کارنامه </h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">معدل</td>
                        <td class="text-center">پایه</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gradeSheets as $gradeSheet)
                        <tr>
                            <td class="text-center">{{$gradeSheet->average}}</td>
                            <td class="text-center">{{$gradeSheet->grade}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
