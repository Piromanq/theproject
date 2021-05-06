@extends('auth.leyouts.master')

@section('title', 'Регистрация')
@section('content')

    <div class="col-md-8">
        <div class="card">
            <a class="navbar-brand" href="{{route('index')}}">
                Вернуться на сайт
            </a>
            <div class="card-header">Регистрация</div>
    <form method="POST" action="{{route('register')}}" aria-label="Register">
        @csrf
        <div class="form-group row">
            @include('auth.leyouts.error', ['fieldName' => 'name'])
            <label for="name" class="col-md-4 col-form-label text-md-right">Никнейм (Ваш псевдоним)</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name"
                       value="" required autofocus>

            </div>
        </div>

        <div class="form-group row">
            @include('auth.leyouts.error', ['fieldName' => 'email'])
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control"
                       name="email" value="" required>

            </div>
        </div>

        <div class="form-group row">
            @include('auth.leyouts.error', ['fieldName' => 'password'])
            <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control"
                       name="password" required>

            </div>
        </div>

        <div class="form-group row">
            @include('auth.leyouts.error', ['fieldName' => 'password-confirm'])
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Подтвердите
                пароль</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                       required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn-enter">
                    Зарегистрироваться
                </button>
                <a class="btn-registration" href="{{route('login')}}">Войти</a>
            </div>
        </div>
    </form>
        </div>
    </div>
@endsection
