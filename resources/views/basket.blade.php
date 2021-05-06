@extends('layouts.master')

@section('title', 'Избранное')

@section('content')


    <h1>Избранное</h1>
    <div class="panel">
        <table class="table table-striped">
            <tbody>
            @foreach($order->products as $product)
            <tr>
                <td>
                    <a class="table__name-of-added" href="{{route('product', [$product->category->code, $product->code])}}">
                        <img class="table__img-of-added" height="56px" src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}">
                        {{$product->name}}
                    </a>
                </td>
                <td>
                    <div class="btn-group form-inline">
                        <form action="{{route('basket-remove', $product)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger" href=""><span
                                    class="btn btn-secondary" aria-hidden="true">Удалить</span></button>
                        </form>
                    </div>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    </div>

@endsection
