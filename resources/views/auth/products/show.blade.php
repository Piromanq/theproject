@extends('auth.leyouts.master')

@section('title', 'Продукт ' . $product->name)

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $product->discription }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>{{ $product->category->name }}</td>
            </tr>

            <tr>
                <td>Озвучка</td>
                <td>{{ $product->voice_acting}}</td>
            </tr>

            <tr>
                <td>День выхода серии</td>
                <td>{{ $product->episode_release_day}}</td>
            </tr>

            <tr>
                <td>Кол-во серий в сезоне</td>
                <td>{{ $product->number_of_episodes}}</td>
            </tr>

            <tr>
                <td>Жанры</td>
                <td>{{ $product->genres}}</td>
            </tr>

            <tr>
                <td>Прогресс</td>
                <td>{{ $product->progress}}</td>
            </tr>

            <tr>
                <td>Кинопоиск АЙ-ДИ</td>
                <td>{{ $product->kinopoisk_id}}</td>
            </tr>

            <tr>
                <td>Кинопоиск рейтинг</td>
                <td>{{ $product->kinopoisk_reting}}</td>
            </tr>

            <tr>
                <td>Картинка ЛОГО</td>
                <td>{{ $product->logo_image}}</td>
            </tr>

            <tr>
                <td>Тайтл. Название для поисковика:</td>
                <td>{{ $product->title}}</td>
            </tr>

            <tr>
                <td>Мета-тег description:</td>
                <td>{{ $product->meta_description}}</td>
            </tr>
            <tr>
                <td>Плеер:</td>
                <td>{{ $product->player}}</td>
            </tr>

            <tr>
                <td>Оригинальное название:</td>
                <td>{{ $product->original_name}}</td>
            </tr>

            <tr>
                <td>Тайтл. Для соц. сетей:</td>
                <td>{{ $product->social_networks_title}}</td>
            </tr>

            <tr>
                <td>URL Для соц. сетей</td>
                <td>{{ $product->social_networks_url}}</td>
            </tr>

            <tr>
                <td>Описание сериала: для соц. сетей</td>
                <td>{{ $product->social_networks_description}}</td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection
