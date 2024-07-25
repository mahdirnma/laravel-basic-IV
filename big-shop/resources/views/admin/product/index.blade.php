@extends('layout.app')
@section('title')
    products
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('product.add')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن محصول +</a>
                <h2 class="text-xl">محصولات</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">عکس محصول</td>
                        <td class="text-center">موجود</td>
                        <td class="text-center">قیمت</td>
                        <td class="text-center">توضیحات</td>
                        <td class="text-center">دسته بندی</td>
                        <td class="text-center">نام محصول</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('product.delete',['product'=>$product->id])}}--}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{--{{route('product.update',['product'=>$product->id])}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$product->picture->main_picture}}</td>
                            <td class="text-center">{{$product->entity==1?"yes":"no"}}</td>
                            <td class="text-center">{{$product->price}}</td>
                            <td class="text-center">{{$product->description}}</td>
                            <td class="text-center">{{$product->category->title}}</td>
                            <td class="text-center">{{$product->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
