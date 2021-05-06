<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Купить новые шины, диски в Клинцах. Проставочные кольца, автомобильные камеры. </title>
    <meta name="description" content="Брянская область, г.Клинцы, ул. Бессарабова 25. Продажа новых шин, дисков, автомобильных камер,
центровочных колец в наличии и под заказ 8-999-620-61-76">
    <meta name="yandex-verification" content="58dddc8c9ec3ba03" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" href="/serial/serials/img/favicon.ico" type="image/x-icon">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(62115706, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/62115706" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <meta name="google-site-verification" content="vTo8sVC1jzF6ugvP006VzKz00c7HhNRmU_szM7JkUeI" />
    <meta name="yandex-verification" content="58dddc8c9ec3ba03" />
    <link rel="stylesheet" href="css/Главная.css">
    <link rel="stylesheet" href="css/slick.css">
    <script src="/serial/js/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/117653b3e1.js" crossorigin="anonymous"></script>
</head>

<header class="header">
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
    <div class="flex-burger">
        <span class="header-address">г.Клинцы, Бессарабова 25</span>
        <br>
         <span class="header_phone_number">+8-999-620-61-76</span>
    </div>
    <div class="header-registration__wrapper">
    @auth
        @admin

            <a href="/admin/products">Панель админа</a>

        @endadmin

    <a class="btn-registration" href="{{route('get-logout')}}">Выйти</a>
    @endauth
<!--
        @guest
            <a class="btn-enter" href="{{route('login')}}">Войти</a>

            <a class="btn-registration" href="{{route('register')}}">Регистрация</a>

        @endguest
        -->
            @auth
        <a class="nav-link" href="{{route('basket')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
            </svg>Моё избранное</a>
            @endauth
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

<div class="clipGroup">
    <div class="clipPath1">
        <div>
        <a href="/tires">
        <span class="layer-image">Шины</span>
        <img class="imgLogo" src="/serial/serials/img/tire.jpg">
        </a>
        </div>
            </div>
            <div class="clipPath2">
                <a href="/disk">
                <span class="layer-image2" id="scroll-btn">Диски</span>
                <img class="imgLogo" src="/serial/serials/img/disk.jpg" >
                </a>
            </div>
</div>

</header>
<script>
window.onscroll = function stickyHeader() {
var header = document.querySelector('.clipGroup');
var headerGroup = document.querySelector('.header-group__wrapper');
    var slider = document.querySelector('.slider-soon');
    var scrollBtn = document.querySelector('#scroll-btn');

if(window.pageYOffset > 1100){
    slider.classList.add('margin-slider');
    header.classList.add('sticky');
    headerGroup.classList.add('stickyHeader');
    scrollBtn.classList.add('scroll-btn');
} else {
    slider.classList.remove('margin-slider');
    header.classList.remove('sticky');
    headerGroup.classList.remove('stickyHeader');
    scrollBtn.classList.remove('scroll-btn');
}
}
</script>
<h1 class="slider-soon">Акции и информация</h1>
<div class="single-item">
    <div class="items">
        <span class="overlay_left"></span>
            <img src="/serial/serials/img/disks.jpg" alt="">
    </div>
    <div class="items">
        <span class="overlay_left"></span>
        <img src="/serial/serials/img/tires.jpg" alt="">
    </div>

    <div class="items">
        <span class="overlay_left"></span>
        <img src="/serial/serials/img/kak_vibratb diski.jpg" alt="">
        <a href="https://razboltovka.ru/" target="_blank">
        <h1>Перейти и посмотреть разболтовку на свою машину</h1>
        </a>
    </div>

    <div class="items">
        <span class="overlay_left"></span>
        <img src="/serial/serials/img/kak_vibratb_reziny.jpg" alt="">
        <a href="https://razboltovka.ru/razmer-shin" target="_blank">
            <h1>Перейти и посмотреть размер резины на свою машину</h1>
        </a>
    </div>
</div>

<body>

<div id="wrapper" class="b-wrapper">

    <div class="containerMovies">
    @yield('content')
</div>
    <a href="" class="back-to-top"></a>

    <script src="/serial/js/back-to-top.js"></script>
    <script src="/serial/js/slick.min.js"></script>
    <script src="/serial/js/slider.js"></script>
    <script src="/serial/js/parallaxfight.js"></script>
    <script src="/serial/js/menu.js"></script>
    <script src="/serial/js/lazyload.js"></script>
    <script src="/serial/js/search.js"></script>
    <script src="/serial/js/select.js"></script>


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
</body>

</html>

