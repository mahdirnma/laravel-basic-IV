@extends('layout.app')
@section('title')
    prescription
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('prescription.add')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن نسخه جدید +</a>
                <h2 class="text-xl">نسخه ها</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">بیمارستان</td>
                        <td class="text-center">نام بیمار</td>
                        <td class="text-center">توضیحات نسخه</td>
                        <td class="text-center">مشخصات نسخه</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prescriptions as $prescription)
                        <tr>
                            <td class="text-center">{{$prescription->hospital->title}}</td>
                            <td class="text-center">{{$prescription->patient->name}}</td>
                            <td class="text-center">{{$prescription->description}}</td>
                            <td class="text-center">{{$prescription->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
