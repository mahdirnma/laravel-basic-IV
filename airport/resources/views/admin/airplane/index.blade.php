@extends('layout.app')
@section('title')
    airplanes
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('airplane.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن هواپیما +</a>
                <h2 class="text-xl">هواپیما ها</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">نوع هواپیما</td>
                        <td class="text-center">ظرفیت</td>
                        <td class="text-center">شماره پرواز</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($airplanes as $airplane)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('product.edit',compact('product'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$airplane->type}}</td>
                            <td class="text-center">{{$airplane->capacity}}</td>
                            <td class="text-center">{{$airplane->flight_code}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
