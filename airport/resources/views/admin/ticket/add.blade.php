@extends('layout.app')
@section('title')
    add ticket
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">افزودن بلیط</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('ticket.store',compact('client'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="flight_time" class="font-semibold ml-5">:ساعت پرواز</label>
                            <input type="text" name="flight_time" id="name" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('flight_time'))
                                <p class="text-red-700">{{$errors->first('flight_time')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="seat_number" class="font-semibold ml-5">: شماره صندلی</label>
                            <input type="number" name="seat_number" max="50" min="1" id="birth_year" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('seat_number'))
                                <p class="text-red-700">{{$errors->first('seat_number')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="اضافه کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="airplane" class="font-semibold ml-5">: شماره پرواز</label>
                            <select name="airplane" id="airplane" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @foreach($airplanes as $airplane)
                                    <option value="{{$airplane->id}}">{{$airplane->flight_code}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('airplane'))
                                <p class="text-red-700">{{$errors->first('airplane')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="line" class="font-semibold ml-5">: ردیف</label>
                            <input type="text" name="line" id="birth_year" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('line'))
                                <p class="text-red-700">{{$errors->first('line')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
