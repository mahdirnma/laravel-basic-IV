@extends('layout.app')
@section('title')
    hospitals
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('hospital.add')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن بیمارستان +</a>
                <h2 class="text-xl">بیمارستان ها</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">حیطه تخصصی بیمارستان*</td>
                        <td class="text-center">نوع بیمارستان</td>
                        <td class="text-center">رِئیس بیمارستان</td>
                        <td class="text-center">ادرس</td>
                        <td class="text-center">منطقه</td>
                        <td class="text-center">شهر</td>
                        <td class="text-center">نام بیمارستان</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hospitals as $hospital)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('product.delete',['product'=>$product->id])}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('hospital.update',compact('hospital'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$hospital->speciality==null?"_":$hospital->speciality}}</td>
                            <td class="text-center">{{$hospital->range}}</td>
                            <td class="text-center">{{$hospital->chairman}}</td>
                            <td class="text-center">{{$hospital->address}}</td>
                            <td class="text-center">{{$hospital->zone}}</td>
                            <td class="text-center">{{$hospital->city}}</td>
                            <td class="text-center">{{$hospital->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
