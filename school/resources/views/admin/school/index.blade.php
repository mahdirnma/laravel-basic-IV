@extends('layout.app')
@section('title')
    schools
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('school.add')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن مدرسه +</a>
                <h2 class="text-xl">مدرسه ها</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">نوع مدرسه</td>
                        <td class="text-center">شماره تلفن</td>
                        <td class="text-center">آدرس</td>
                        <td class="text-center">شهر</td>
                        <td class="text-center">نام مدرسه</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schools as $school)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('hospital.delete',compact('hospital'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('school.update',compact('school'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$school->type}}</td>
                            <td class="text-center">{{$school->telephone}}</td>
                            <td class="text-center">{{$school->address}}</td>
                            <td class="text-center">{{$school->city}}</td>
                            <td class="text-center">{{$school->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
