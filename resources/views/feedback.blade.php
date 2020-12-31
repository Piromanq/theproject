

@section('title', 'жалоба')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <ul role="menu">
            <img src="/serial/serials/img/The-oa-tv-logo.png" alt="">
            <h1 class="logo__label">.watch</h1>
            <li><a href="indexg.php" role="menuitem">Все материалы</a></li>
            <li><a href="index film.php" role="menuitem">Правообладателям</a></li>
        </ul>
    </nav>
</div>
    <div class="header-group__wrapper">
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

            <div class="card-header">Отправка жалобы</div>
            <form method="POST" action="{{url('/feedback/send')}}" aria-label="Register" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    @include('auth.leyouts.error', ['fieldName' => 'massage'])
                    <label for="massage"  class="col-md-4 col-form-label text-md-right">Укажите страницу котороя нарушает авторское право</label>

                    <div class="col-md-6">

                        <textarea id="massage" type="text" class="form-control" name="massage"
                               value="" required autofocus>
                        </textarea>
                    </div>
                </div>
<div class="img-add__form">
                <div class="input-group row">
                    <label for="img" class="col-sm-2 col-form-label">Загрузите изоброжение документа подтверждающего ваши права на ЭТОТ материал. </label>
                    <div class="img-wrapper">
                        <label>Допустимый морфат изображения: jpg, jpeg, webp, bmp, png.<br></label>
                        <label>Размер изображения не должен превышать 5Mb.</label>
                        <label class="btn btn-default btn-file">
                            @include('auth.leyouts.error', ['fieldName' => 'img'])
                             <input type="file"  name="img" id="img" onchange="PreviewImage();">
                            <img id="uploadPreview" src="" style="max-width: 200px; max-height: 150px; margin: 20px;" alt="">
                            <script>
                                function PreviewImage() {
                                    var img = document.getElementById('uploadPreview');
                                    var oFReader = new FileReader();
                                    var send = document.getElementById('send');
                                    oFReader.readAsDataURL(document.getElementById("img").files[0]);
                                    oFReader.onload = function (oFREvent) {
                                        document.getElementById("uploadPreview").src = oFREvent.target.result;
                                    };
                                    if(img.value === 0){

                                        send.setAttribute('disabled', 'disabled');
                                    }else{
                                        send.removeAttribute('disabled');
                                    }
                                };
                            </script>

                        </label>
                    </div>
                </div>

</div>
                <div class="btn-wrapper">
                    <div class="btn-center">
                        <button type="submit" disabled="disabled" id="send" class="btn btn-primary">
                            Отправить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="footer" style="margin: 0!important;">
    <div class="footer-wrapper">

        <div class="footer-contacts">
            <div class="footer-logo">
                <h1 class="logo__label">OA.ru</h1>
                <span class="footer-description">Весь размещенный на сайте материал представляет собой контент, находящийся в свободном доступе для скачивания и просмотра в сети Интернет.</span>
            </div>
            <div class="footer-contacts__wrapper">
                <a class="footerCopyrightHolder" href="/feedback"><i class="fas fa-file-signature"></i>Правообладателям</a>
                <span class="footer-description">Если Вы, будучи правообладателем определённого контента, обнаружили, что сайт нарушает Ваши права, просим вас обратиться по указаным контактам. Так же
        вы можете обротиться к нам напрямую перейдя по ссылке:  <a class="footerCopyrightHolder__smal" href="/feedback">Правообладателям</a> </span>

            </div>
            <span class="footerCopyrightHolder"><i class="fas fa-id-badge"></i>Контакты:<br>OfficialTheOa@gmail.com<br>Officialtheoa@yandex.ru</span>
        </div>
    </div>

</div>
<script src="/serial/js/menu.js"></script>
</body>

</html>



