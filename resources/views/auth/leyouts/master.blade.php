


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/serial/serials/img/favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">

            <div id="navbar" class="collapse navbar-collapse">
                @admin
                <ul class="nav navbar-nav">
                    <li><a class="navbar-brand" href="{{route('index')}}">Вернуться на сайт</a></li>
                    <li><a class="nav-link" href="{{route('categories.index')}}">Категории</a></li>
                    <li><a class="nav-link" href="{{ route('products.index') }}">Товары</a></li>
                </ul>
                @endadmin

                @auth
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-link" href="{{route('get-logout')}}">Выйти</a></li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
