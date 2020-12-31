@extends('masters')

@section('title', 'Сериалы онлайн')

@section('content')
<body>
<div class="overlay_yjasi"></div>
<div class="overlay_yjasi"></div>
<div class="overlayTwice"></div>
<div id="wrapper" class="b-wrapper">
    <div class="wrapper-between">
        <div class="original-title">
            <div class="location-title">{{$product->original_name}}</div>
            <div class="original-title_image">
                @if(isset($product->ChannelImg))

                <img src="{{$product->ChannelImg}}" alt="">
                @endif
            </div>
        </div>
        <div class="name">
<div class="title-watch">
    <div class="label-play">
        <div class="exactly-title">
            <div class="play-icon">
                    <span class='playBut__In'>

                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                        <svg version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="https://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                             x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                             xml:space="preserve">

<polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
	73.5,62.5 148.5,105.8 73.5,149.1 "/>

                            <circle class='circle' id="XMLID_17_" fill="none"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"/>
</svg>

                    </span>
            </div>
            <div class="play-text">
               <div class="play-button-title">Смотреть</div>
                <div class="play-button-twice">онлайн</div>
            </div>
        </div>
    </div>
</div>
            <div class="elem-text__title">


                <h1> @if($product->category_id == 1) Сериал@endif  @if($product->category_id == 2) Фильм@endif {{$product->name}}</h1>
            </div>
        </div>
    <div class="main-description">
    <div class="description-rating">
        <div class="rating-container">
<div class="rating-flex">
    @if(isset($product->IMDbRating))
    <img src="/serial/serials/img/imdb-rating.jpg" alt="">
    <span>{{$product->IMDbRating}}</span>
    @endif
</div>
        <div class="rating-flex">
            @if(isset($product->kinopoisk_reting))
            <img class="kinopoisk_ratingImg" src="/serial/serials/img/kinopoisk_rating.webp" alt="">
            <span>{{$product->kinopoisk_reting}}</span>
            @endif
        </div>
        </div>
        <div class="description-year">
            <div class="element__description-year">{{$product->release_date}}</div>
            <div class="element__description-year">{{$product->SingleJanr}}</div>
        </div>
    </div>
    <div>
<div class="description-text">
    <div>
        <div>
        <span>{{$product->discription}}</span>
        </div>
    </div>
</div>
    <div class="grid-group">
        <div class="col__data-description">Режиссеры:</div>
        <div class="description-Director">
            <span>{{$product->StageDirector}}</span>
        </div>
        <div class="col__data-description">Страна:</div>
        <div class="description-Director">
            <span>{{$product->Country}}</span>
        </div>
        @if(isset($product->Channel))

        <div class="col__data-description">Производство:</div>
        <div class="description-Director">
            <span>{{$product->Channel}}</span>
        </div>
        @endif
    </div>
</div>
    </div>

    <div id="slider">
        @if(isset($product->player))

        <iframe src="{{ $product->player }}" title="Бортпроводница" allowfullscreen="" allow="autoplay *" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe>
      @else
                <iframe src="{{ $product->another_player }}" title="Бортпроводница" allowfullscreen="" allow="autoplay *" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe>
        @endif
        <div class="first_episode">
        </div>
    </div>
    </div>
</div>
<script src="/serial/js/menu.js"></script>
<script src="/serial/js/search.js"></script>
</body>
</html>
@endsection




