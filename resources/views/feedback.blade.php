

@section('title', 'Письмо')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/serial/serials/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/Главная.css">
    <link rel="stylesheet" href="/css/feedback.css">
    <script src="/serial/js/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/117653b3e1.js" crossorigin="anonymous"></script>
</head>
<div class="wrapper-burger">
    <div class="navBurger" role="navigation" id="navToggle"> <span class="burger-menu">Меню</span>  </div>
</div>
<div class="overlay">
    <nav class="overlayMenu">
        <div class="burger-registration__wrapper">
        <!--
            @guest

            <a class="btn-enter" href="{{route('login')}}">Войти</a>

                <a class="btn-registration" href="{{route('register')}}">Регистрация</a>

            @endguest
            -->
            @auth
                <a class="btn-registration" href="{{route('get-logout')}}">Выйти</a>
            @endauth
        </div>
        <ul role="menu">
            <div class="flex-burger">
                <span class="burger-header-address">г.Клинцы, Бессарабова 25</span>
                <span class="footerCopyrightPhone">Звонки принимаются: 9:00 - 18:00</span>
                <span class="footer_phone_number">+8-999-620-61-76</span>
            </div>
            <img class="logo__label" src="/serial/serials/img/pitstoplogo.png" alt="">

            <li><a href="/" role="menuitem">Весь ассортимент</a></li>
            <li><a href="/feedback" role="menuitem">Написать нам</a></li>
            @auth
                <li>
                    <a class="nav-link" href="{{route('basket')}}">Избранное</a>
                </li>
            @endauth
        </ul>
    </nav>
</div>
    <div class="header-group__wrapper">
        <div class="header-left__group">
            <a href="/">
                <span class="header-span__group">Весь ассортимент</span>
            </a>
        </div>
        <div class="header__group">
            <div class="header-logo">
                <!--
                <img src="/serial/serials/img/logo.png" alt="">
                -->
                <img class="logo__label" src="/serial/serials/img/pitstoplogo.png" alt="">
            </div>
            <div class="header-search"></div>
        </div>
        <div class="header-right__group">
            <a href="/feedback">
                <span class="header-span__group">Написать нам</span>
            </a>
        </div>

    </div>
<form action="{{route('search')}}" method="get">
    <div class="close">

        <i class="fa fa-close"></i>
        <input type="hidden" name="do" value="search">
        <input type="hidden" name="subaction" value="search">
    </div>
    <div class="search">
        <i class="fa fa-search"><span class="search-btn">Поиск</span></i>
        <input id="story" class="input" name="search" placeholder="Поиск..." type="text" autocomplete="off" minlength="2" maxlength="30" required>
        <button type="submit" name="submit-search" title="Найти"></button>
    </div>
</form>
<body>
<div class="feedback-bg-linear">
    <div class="position-feedback__form">
        <div class="card">
            @if(session()->has('success'))
                <p class="alert alert-success">{{session()->get('success')}}</p>
            @endif

            <div class="card-header">Отправка письма</div>
            <form method="POST" action="{{url('/feedback/send')}}" aria-label="Register" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    @include('auth.leyouts.error', ['fieldName' => 'massage'])
                    <label for="massage"  class="col-md-4 col-form-label text-md-right">Укажите свою электронную почту что бы мы смогли вам огвтетить!</label>

                    <div class="col-md-6">

                        <textarea id="massage" type="text" class="form-control" name="massage"
                               value="" required autofocus>
                        </textarea>
                    </div>
                </div>


                <div class="btn-wrapper">
                    <div class="btn-center">
                        <button type="submit" id="send" class="btn btn-primary">
                            Отправить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer-wrapper">

        <div class="footer-contacts">


            <div class="footer-contacts__wrapper">
                <a class="footerCopyrightHolder" href="/feedback"><i class="fas fa-file-signature"></i>Написать нам прямо сейчас</a>
                <span class="footer-description">Если у вас есть вопрос вы можете задать его нажав на ссылку "Написать нам прямо сейчас" и мы ответим вам на вашу электронную почту.</span>
                <img class="logo__label" src="/serial/serials/img/pitstoplogo.png" alt="">
            </div>
            <div class="wrapper-CopyrightHolder">
                <div class="footer-logo">
                    <span class="burger-header-address">г.Клинцы, Бессарабова 25</span>
                    <span class="footerCopyrightPhone">Звонки принимаются: 9:00 - 18:00</span>
                    <span class="footer_phone_number">+8-999-620-61-76</span>
                    <span class="footerCopyrightHolder"><i class="fas fa-id-badge"></i>Контакты:<br>OfficialTheOa@gmail.com<br>Officialtheoa@yandex.ru</span>
                </div>

            </div>
            <div class="footer_right_block">
                <div class="footer_flex_menu">
                    <h2 class="right_block_items_name">Навигация по сайту</h2>
                    <a href="/" class="right_block_items"><span>Весь ассортимент</span></a>
                    <a href="/tires" class="right_block_items">Шины</a>
                    <a href="/disk" class="right_block_items">Диски</a>
                    <a href="https://razboltovka.ru/razmer-shin" class="right_block_items" target="_blank">Как подобрать шины?</a>
                    <a href="https://razboltovka.ru/" class="right_block_items" target="_blank">Как подобрать диски?</a>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="/serial/js/menu.js"></script>
</body>

</html>



