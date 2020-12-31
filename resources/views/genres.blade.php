<link rel="stylesheet" href="/css/ganres.css">
@extends('layouts.master')

@section('title', 'Главная')

@section('content')
    @if(session()->has('success'))
        <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{session()->get('warning')}}</p>
        @endif

        {{$products->links()}}
        @foreach($products as $product)
        @include('card', compact('product'))
        @endforeach
        </div>

        </div>

@endsection
