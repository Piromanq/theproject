@extends('masters')

@section('title', 'Сериалы онлайн')

@section('content')
<body>
<div class="overlay_yjasi"></div>
<div class="overlay_yjasi"></div>
<div class="overlayTwice"></div>
<div id="wrapper" class="b-wrapper">
    <div class="wrapper-between">
        <img class="tires-main-img" src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}" alt="">
        <div class="original-title">

        <!--
            <div class="original-title_image">
                @if(isset($product->ChannelImg))

                    <a href="{{$product->ChannelImg}}">Посмотреть отзывы на <img src="/serial/serials/img/Yandex-market.png" alt=""></a>
                @endif

            </div>
        </div>

               <div class="name">

        <div class="title-watch">
           <div class="label-play">
               <div class="exactly-title">
                   <div class="play-icon">
                           <span class='playBut__In'>

                            Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In
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
        -->
            <div class="elem-text__title">



            </div>
        </div>
        @if($product->category_id == 2)
            <style>
                .main-description {
                    min-height: 49vh!important;
                }
                @media (orientation: portrait){
                    .main-description {
                        min-height: 270px!important;
                    }
                }

            </style>
            @endif
    <div class="main-description">
    <div class="description-rating">

        <div class="rating-container">
            <div class="rating-flex">
                @if(isset($product->ChannelImg))
                    <a target="_blank" class="wrapper-center" href="{{$product->ChannelImg}}"><span class="element__description-year">Посмотреть отзывы</span><img src="/serial/serials/img/Yandex-market.png" alt=""></a>
                    <span>{{$product->load_class}}</span>
                @endif
            </div>
<!--
            <div class="rating-flex">
                @if(isset($product->speed_class))
                    <img class="kinopoisk_ratingImg" src="/serial/serials/img/kinopoisk_rating.webp" alt="">
                    <span>{{$product->speed_class}}</span>
                @endif
            </div>
            -->
        </div>
        @if($product->category_id == 1)
        <div class="description-year">
            <div class="element__description-year">Описание:</div>

            <div class="element__description-year">{{$product->name}}</div>
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

        <div class="col__data-description">Наличие:</div>
        <div class="description-Director">
            <span>{{$product->release_date}}</span>
        </div>

        <div class="col__data-description">Страна производитель:</div>
        <div class="description-Director">
            <span>{{$product->Channel}}</span>
        </div>

        <div class="col__data-description">Бренд:</div>
        <div class="description-Director">
            <span>{{$product->Country}}</span>
        </div>
        <div class="col__data-description">Модель:</div>
        <div class="description-Director">
            <span>{{$product->StageDirector}}</span>
        </div>
        @if(isset($product->diameter))

        <div class="col__data-description">Диаметр, дюйм:</div>
        <div class="description-Director">
            <span>{{$product->diameter}}</span>
        </div>
        @endif
        <div class="col__data-description">Ширина профиля, мм:</div>
        <div class="description-Director">
            <span>{{$product->voice_acting}}</span>
        </div>

        <div class="col__data-description">Высота профиля, %:</div>
        <div class="description-Director">
            <span>{{$product->episode_release_day}}</span>
        </div>

        <div class="col__data-description">Диаметр, дюйм:</div>
        <div class="description-Director">
            <span>{{$product->number_of_episodes}}</span>
        </div>

        <div class="col__data-description">Сезонность:</div>
        <div class="description-Director">
            <span>{{$product->genres}}</span>
        </div>

        <div class="col__data-description">Шипы:</div>
        <div class="description-Director">
            <span>{{$product->player}}</span>
        </div>

        <div class="col__data-description">Индекс нагрузки:</div>
        <div class="description-Director">
            <span>{{$product->another_player}}</span>
        </div>

        <div class="col__data-description">Индекс скорости:</div>
        <div class="description-Director">
            <span>{{$product->speed_index}}</span>
        </div>

        <div class="col__data-description">Повышенная грузоподъемность:</div>
        <div class="description-Director">
            <span>{{$product->increased_lifting_capacity}}</span>
        </div>

        <div class="col__data-description">Технология RunFlat:</div>
        <div class="description-Director">
            <span>{{$product->RunFlat_technology}}</span>
        </div>

        <div class="col__data-description">Тип транспортного средства:</div>
        <div class="description-Director">
            <span>{{$product->vehicle_type}}</span>
        </div>

        <div class="col__data-description">Конструкция:</div>
        <div class="description-Director">
            <span>{{$product->design}}</span>
        </div>

        <div class="col__data-description">Способ герметизации:</div>
        <div class="description-Director">
            <span>{{$product->sealing_method}}</span>
        </div>

    </div>
        @endif
        @if($product->category_id == 2)
            <div class="description-year">

                <div class="element__description-year">{{$product->name}}</div>
            </div>
    </div>
        <div>
        <div class="grid-group">

            <div class="col__data-description">Наличие:</div>
            <div class="description-Director">
                <span>{{$product->release_date}}</span>
            </div>

            <div class="col__data-description">Тип:</div>
            <div class="description-Director">
                <span>{{$product->Channel}}</span>
            </div>

            <div class="col__data-description">Бренд:</div>
            <div class="description-Director">
                <span>{{$product->Country}}</span>
            </div>
            @isset($product->StageDirector)
            <div class="col__data-description">Модель:</div>
            <div class="description-Director">
                <span>{{$product->StageDirector}}</span>
            </div>
            @endisset

            <div class="col__data-description">Ширина обода, дюйм:</div>
            <div class="description-Director">
                <span>{{$product->voice_acting}}</span>
            </div>

            <div class="col__data-description">Диаметр, дюйм:</div>
            <div class="description-Director">
                <span>{{$product->number_of_episodes}}</span>
            </div>

            <div class="col__data-description">Кол-во крепежных отверстий:</div>
            <div class="description-Director">
                <span>{{$product->genres}}</span>
            </div>

            <div class="col__data-description">Диаметр расположения отверстий (PCD), мм:</div>
            <div class="description-Director">
                <span>{{$product->player}}</span>
            </div>

            <div class="col__data-description">Диаметр центрального отверстия диска, мм:</div>
            <div class="description-Director">
                <span>{{$product->another_player}}</span>
            </div>

            <div class="col__data-description">Вылет (ET), мм:</div>
            <div class="description-Director">
                <span>{{$product->speed_index}}</span>
            </div>

        </div>
            @endif
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




