@extends('layouts.master')

@section('title', 'Корзина заказов')

@section('content')
    <div class="starter-template">
    <h1>Все категории</h1>

        <div class="row">

        @foreach($categories as $category)

            <div class="category_image">
                <div class="thumbnail">

            <div class="panel">

                    <a href="/{{$category->code}}" class="shadow_category-img"><img src="{{\Illuminate\Support\Facades\Storage::url($category->image)}}">
                    <span class="spancategory">{{$category->name}}</span>
                    </a>


                    <h2 class="category category_name"></h2>
                <p>
                    {{$category->description}}
                </p>
            </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>




@endsection
