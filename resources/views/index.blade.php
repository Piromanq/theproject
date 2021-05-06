@extends('layouts.master')

@section('title', 'Главная')

@section('content')


    <h1>Вы в категории: Весь ассортимент </h1><span class="ProductCount"></span>
    <h2 class="discription-category">В этой категории находятся все товары которые есть на сайте. По умолчанию категория сортируется по дате добавления.</h2>
    {{$products->links()}}


            @foreach($products as $product)
@include('card', compact('product'))
            @endforeach
    </div>

    </div>

@endsection
