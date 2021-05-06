@extends('auth.leyouts.master')

@section('title', 'Авторизация')

@section('content')
    @if(session()->has('success'))
        <p class="alert alert-success">{{session()->get('success')}}</p>
    @endif
    @if(session()->has('error'))
        <p class="alert alert-warning">{{session()->get('error')}}</p>
    @endif
    <div class="col-md-8">
        <div class="card">
            <a class="navbar-brand" href="{{route('index')}}">
                Вернуться на сайт
            </a>
            <div class="card-header">Авторизация</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('login')}}" aria-label="Login">
                                @csrf
                                <div class="form-group row">
                                    @include('auth.leyouts.error', ['fieldName' => 'email'])
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control"
                                               name="email" value="" required autofocus>
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
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn-enter">
                                            Войти
                                        </button>
                                        <a class="btn-registration" href="{{route('register')}}">Регистрация</a>
                                    </div>
                                </div>
                            </form>
                        </div>
        </div>
    </div>
    </div>
                        @endsection

