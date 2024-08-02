@extends('layout.app')
@section('title')
    patients
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('patient.add')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن بیمار جدید +</a>
                <h2 class="text-xl">بیماران</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">مشخصات نسخه</td>
                        <td class="text-center">بیمارستان</td>
                        <td class="text-center">جنسیت</td>
                        <td class="text-center">سن</td>
                        <td class="text-center">توضیحات بیمار</td>
                        <td class="text-center">نام بیمار</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('patient.delete',compact('patient'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('patient.update',compact('patient'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('prescription.index',['prescription'=>$patient->id])}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-red-700">prescription</button>
                                </form>
                            </td>
                            <td class="text-center">{{$patient->hospital->title}}</td>
                            <td class="text-center">{{$patient->gender}}</td>
                            <td class="text-center">{{$patient->age}}</td>
                            <td class="text-center">{{$patient->information->description}}</td>
                            <td class="text-center">{{$patient->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
