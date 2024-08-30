@extends('layout.app')
@section('title')
    clients
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('client.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن مشتری +</a>
                <h2 class="text-xl">مشترکین</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">بلیط ها</td>
                        <td class="text-center">تاریخ تولد</td>
                        <td class="text-center">جنسیت</td>
                        <td class="text-center">نام</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('airplane.update',compact('airplane'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{--{{route('airplane.update',compact('airplane'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-amber-600">بلیط ها</button>
                                </form>
                            </td>
                            <td class="text-center">{{$client->birth_year}}</td>
                            <td class="text-center">{{$client->gender}}</td>
                            <td class="text-center">{{$client->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
