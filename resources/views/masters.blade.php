<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$product->title}} LostFilm смотреть онлайн бесплатно в хорошем качестве HD 720 или 1080p</title>
    <meta name="description" content="{{$product->meta_description}}">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" href="/serial/serials/img/favicon.ico" type="image/x-icon">
    <meta property="og:site_name" content="Сериалы онлайн смотреть бесплатно. Кино сериалы в хорошем качестве от LostFilm HD 720, 1080p">
    <meta name="google-site-verification" content="vTo8sVC1jzF6ugvP006VzKz00c7HhNRmU_szM7JkUeI" />
    <meta name="yandex-verification" content="58dddc8c9ec3ba03" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{$product->social_networks_title}}">
    <meta property="og:url" content="https://kinomaniack.ru/{{$product->social_networks_url}}">
    <meta property="og:description" content="{{$product->social_networks_description}}">
    <link rel="stylesheet" href="/css/watch.css">
    <link rel="stylesheet" href="/css/Главная.css">
    <script src="/serial/js/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/117653b3e1.js" crossorigin="anonymous"></script>
</head>

<header class="header">
    <div class="wrapper-burger">
        <div class="navBurger" role="navigation" id="navToggle"> <span class="burger-menu">Меню</span>  </div>
    </div>
    <div class="overlay">
        <nav class="overlayMenu">
            <ul role="menu">
                    <h1 class="logo__label">OA.online</h1>
                <li><a href="/" role="menuitem">Все материалы</a></li>
                <li><a href="/feedback" role="menuitem">Правообладателям</a></li>
                <li><a href="/film" role="menuitem">Фильмы</a></li>
                <li><a href="/serials" role="menuitem">Сериалы</a></li>
            </ul>
        </nav>
    </div>
    <div class="header-group__wrapper" style="position: fixed!important;">
        <div class="header-left__group">
            <a href="/">
                <span class="header-span__group">Все материалы</span>
            </a>
        </div>
        <div class="header__group">
            <div class="header-logo">
                <img src="/serial/serials/img/The-oa-tv-logo.png" alt="">
                <h1 class="logo__label">.watch</h1>
            </div>
            <div class="header-search"></div>
        </div>
        <div class="header-right__group">
            <a href="/feedback">
                <span class="header-span__group">Правообладателям</span>
            </a>
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

    </div>
    <img src="{{\Illuminate\Support\Facades\Storage::url($product->logo_image)}}" alt="Бортпроводница 1 сезон 1-3 серия - Lostfilm, 1080p смотреть онлайн" class="nova">
</header>

@yield('content')

<div class="footer">
    <div class="footer-wrapper">

        <div class="footer-contacts">
            <div class="footer-logo">
                <h1 class="logo__label">OA.ru</h1>
                <span class="footer-description">Весь размещенный на сайте материал представляет собой контент, находящийся в свободном доступе для скачивания и просмотра в сети Интернет.</span>
            </div>
            <div class="footer-contacts__wrapper">
                <a class="footerCopyrightHolder" href="/feedback"><i class="fas fa-file-signature"></i>Правообладателям</a>
                <span class="footer-description">Если Вы, будучи правообладателем определённого контента, обнаружили, что сайт нарушает Ваши права, просим вас обратиться по указаным контактам. Так же
        вы можете можете обротиться к нам напрямую перейдя по ссылке:  <a class="footerCopyrightHolder__smal" href="/feedback">Правообладателям</a> </span>

            </div>
            <div class="wrapper-CopyrightHolder">
                <span class="footerCopyrightHolder"><i class="fas fa-id-badge"></i>Контакты:<br>weronikanqt@gmail.com<br>amiarov@yandex.ru</span>
            </div>
        </div>
    </div>

</div>


