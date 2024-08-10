@extends('layout.app')
@section('title')
    file
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex flex-row-reverse justify-between items-center border-b">
                <h2 class="text-xl">{{$student->firstname}} {{$student->lastname}} پرونده ی </h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">توضیحات</td>
                        <td class="text-center">پایه های گذرانده شده</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @if($file!=null){
                        <td class="text-center">{{$file->description}}</td>
                        <td class="text-center">{{$file->grades}}</td>
                        @endif
                        <td class="text-center">پرونده ناقص است</td>
                        <td class="text-center">پرونده ناقص است</td>
                    </tr>
                    </tbody>
                </table>
            </div>
    </div>
@endsection
