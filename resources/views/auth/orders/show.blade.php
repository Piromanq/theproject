@extends('auth.leyouts.master')

@section('title', 'Заказ ' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ №{{ $order->id }}</h1>
                    <p>Заказчик: <b>{{ $order->name }}</b></p>
                    <p>Номер телефона: <b>{{ $order->phomne }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Полная стоимость</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($order->products as $product)
                            <tr>
                                <td>
                                    <a href="{{route('product', $product)}}">
                                        <img height="56px"
                                             src="{{ Storage::url($product->image) }}">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td><span class="badge">{{$product->pivot->count}}</td>
                                <td><span class="badge">{{$product->price}}  руб.</td>
                                <td><span class="badge">{{$product->getPriceForCount()}} руб.</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>{{$order->getFullPrice()}}руб.</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
