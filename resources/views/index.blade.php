@extends('layouts.master')

@section('title', 'Главная')

@section('content')

    @if(session()->has('success'))
        {{session()->forget('success')}}
        <p class="alert alert-success">{{session()->get('success')}}</p>
    @endif

    <h1>Вы в категории: Все материалы </h1><span class="ProductCount"></span>
    <h2 class="discription-category">В категории все материалы находится весь контент который есть на OA.ru. По умолчанию категория сортируется по дате добавления. На первой странице всегда находится самый свежий контент.</h2>
    {{$products->links()}}


            @foreach($products as $product)
@include('card', compact('product'))
            @endforeach
    </div>

    </div>

@endsection
