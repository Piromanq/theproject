@extends('auth.leyouts.master')

@isset($product)
    @section('title', 'Редактировать товар ' . $product->name)
@else
    @section('title', 'Создать товар')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>Редактировать <b>{{ $product->name }}</b></h1>
        @else
            <h1>Добавить</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                    <input type="checkbox" name="" id="load" onclick="Load();">
                    <div class="input-group row">
                        <label for="category_id" class="col-sm-2 col-form-label" id="tires">Категория: </label>
                        <label for="category_id" class="col-sm-2 col-form-label hide" id="disk">Категория Для дисков : </label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'category_id'])
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                            @isset($product)
                                            @if($product->category_id == $category->id)
                                            selected
                                        @endif
                                        @endisset
                                    >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="input-group row">
                        <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'price'])
                            <input type="text" class="form-control" name="price" id="price"
                                   value="@isset($product){{ $product->price }}@endisset">
                        </div>
                    </div>

                <div class="input-group row">
                    <label for="release_date" class="col-sm-2 col-form-label">Наличие: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'release_date'])
                        <input type="text" class="form-control" name="release_date" id="release_date"
                               value="@isset($product){{ $product->release_date }}@endisset">
                    </div>
                </div>

                <div class="input-group row" id="yandex_market">
                    <label for="ChannelImg" class="col-sm-2 col-form-label">Ссылка на отзывы яндекс маркет: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'ChannelImg'])
                        <input type="text" class="form-control" name="ChannelImg" id="ChannelImg"
                               value="@isset($product){{ $product->ChannelImg }}@endisset">
                    </div>
                </div>
                    <script>
                        function Load() {
                            var load = document.getElementById('load').checked;
                            var tires = document.getElementById('tires');
                            var disk = document.getElementById('disk');
                            var yandex_market = document.getElementById('yandex_market');
                            var type = document.getElementById('type');
                            var country = document.getElementById('country');
                            var width_shape = document.getElementById('width_shape');
                            var width_rim = document.getElementById('width_rim');
                            var height_shape = document.getElementById('height_shape');
                            var seasonality = document.getElementById('seasonality');
                            var mounting_holes = document.getElementById('mounting_holes');
                            var spike = document.getElementById('spike');
                            var hole_spacing = document.getElementById('hole_spacing');
                            var load_index = document.getElementById('load_index');
                            var center_hole = document.getElementById('center_hole');
                            var speed_index = document.getElementById('speed_index');
                            var ET = document.getElementById('ET');
                            var increased_load = document.getElementById('increased_load');
                            var RunFlat = document.getElementById('RunFlat');
                            var type_of_transport = document.getElementById('type_of_transport');
                            var design = document.getElementById('design');
                            var sealing_method = document.getElementById('sealing_method');
                            var tires_check = document.getElementById('tires_check');
                            if(load === true){
                                tires.classList.add("hide");
                                disk.classList.remove('hide');
                                yandex_market.classList.add("hide");
                                type.classList.remove("hide");
                                country.classList.add("hide");
                                width_shape.classList.add("hide");
                                width_rim.classList.remove("hide");
                                height_shape.classList.add("hide");
                                seasonality.classList.add("hide");
                                mounting_holes.classList.remove("hide");
                                spike.classList.add("hide");
                                hole_spacing.classList.remove("hide");
                                load_index.classList.add("hide");
                                center_hole.classList.remove("hide");
                                speed_index.classList.add("hide");
                                ET.classList.remove("hide");
                                increased_load.classList.add("hide");
                                RunFlat.classList.add("hide");
                                type_of_transport.classList.add("hide");
                                design.classList.add("hide");
                                sealing_method.classList.add("hide");
                                tires_check.classList.add("hide");
                                return false;

                            } else{
                                tires.classList.remove("hide");
                                disk.classList.add("hide");
                                yandex_market.classList.remove("hide");
                                type.classList.add("hide");
                                country.classList.remove("hide");
                                width_shape.classList.remove("hide");
                                width_rim.classList.add("hide");
                                height_shape.classList.remove("hide");
                                seasonality.classList.remove("hide");
                                mounting_holes.classList.add("hide");
                                spike.classList.remove("hide");
                                hole_spacing.classList.add("hide");
                                load_index.classList.remove("hide");
                                center_hole.classList.add("hide");
                                speed_index.classList.remove("hide");
                                ET.classList.add("hide");
                                return true;
                            }
                        }
                    </script>
                <!--
                <div class="input-group row">
                    <label for="original_name" class="col-sm-2 col-form-label">Оригинальное название: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'original_name'])
                        <input type="text" class="form-control" name="original_name" id="original_name"
                               value="@isset($product){{ $product->original_name }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="SingleJanr" class="col-sm-2 col-form-label">Главный жанр (1): </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'SingleJanr'])
                        <input type="text" class="form-control" name="SingleJanr" id="SingleJanr"
                               value="@isset($product){{ $product->SingleJanr }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="kinopoisk_reting" class="col-sm-2 col-form-label">Кинопоиск рейтинг:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'kinopoisk_reting'])
                        <input type="text" class="form-control" name="kinopoisk_reting" id="kinopoisk_reting"
                               value="@isset($product){{ $product->kinopoisk_reting }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">IMDb рейтинг: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'IMDbRating'])
                        <input type="text" class="form-control" name="IMDbRating" id="IMDbRating"
                               value="@isset($product){{ $product->IMDbRating }}@endisset">
                    </div>
                </div>
-->
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label" id="country">Страна производитель: </label>
                    <label for="name" class="col-sm-2 col-form-label hide" id="type">Тип: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'Channel'])
                        <input type="text" class="form-control" name="Channel" id="Channel"
                               value="@isset($product){{ $product->Channel }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Бренд: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'Country'])
                        <input type="text" class="form-control" name="Country" id="Country"
                               value="@isset($product){{ $product->Country }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Модель: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'StageDirector'])
                        <input type="text" class="form-control" name="StageDirector" id="StageDirector"
                               value="@isset($product){{ $product->StageDirector }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'code'])
                        <input type="text" class="form-control" name="code" id="code"
                               value="@isset($product){{ $product->code }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Полное название: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'name'])
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($product){{ $product->name }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="voice_acting" class="col-sm-2 col-form-label" id="width_shape">Ширина профиля, мм:</label>
                    <label for="voice_acting" class="col-sm-2 col-form-label hide" id="width_rim">Ширина обода, дюйм:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'voice_acting'])
                        <input type="text" class="form-control" name="voice_acting" id="voice_acting"
                               value="@isset($product){{ $product->voice_acting }}@endisset">
                    </div>
                </div>
                <div class="input-group row" id="height_shape">
                    <label for="episode_release_day" class="col-sm-2 col-form-label" >Высота профиля, %:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'episode_release_day'])
                        <input type="text" class="form-control" name="episode_release_day" id="episode_release_day"
                               value="@isset($product){{ $product->episode_release_day }}@endisset">
                    </div>
                </div>
                <div class="input-group row">
                    <label for="number_of_episodes" class="col-sm-2 col-form-label">Диаметр, дюйм:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'number_of_episodes'])
                        <input type="text" class="form-control" name="number_of_episodes" id="number_of_episodes"
                               value="@isset($product){{ $product->number_of_episodes }}@endisset">
                    </div>
                </div>
                <div class="input-group row">
                    <label for="genres" class="col-sm-2 col-form-label" id="seasonality">Сезонность:</label>
                    <label for="genres" class="col-sm-2 col-form-label hide" id="mounting_holes">Крепежные отверстия:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'genres'])
                        <input type="text" class="form-control" name="genres" id="genres"
                               value="@isset($product){{ $product->genres }}@endisset">
                    </div>
                </div>

                    <div class="input-group row">
                        <label for="player" class="col-sm-2 col-form-label" id="spike">Шипы:</label>
                        <label for="player" class="col-sm-2 col-form-label hide" id="hole_spacing">Диаметр расположения отверстий (PCD), мм:</label>

                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'player'])
                            <input type="text" class="form-control" name="player" id="player"
                                   value="@isset($product){{ $product->player }}@endisset">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="another_player" class="col-sm-2 col-form-label" id="load_index">Индекс нагрузки:</label>
                        <label for="another_player" class="col-sm-2 col-form-label hide" id="center_hole">Диаметр центрального отверстия диска, мм:</label>

                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'another_player'])
                            <input type="text" class="form-control" name="another_player" id="another_player"
                                   value="@isset($product){{ $product->another_player }}@endisset">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="another_player" class="col-sm-2 col-form-label" id="speed_index">Индекс скорости:</label>
                        <label for="another_player" class="col-sm-2 col-form-label hide" id="ET">Вылет (ET), мм:</label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'speed_index'])
                            <input type="text" class="form-control" name="speed_index" id="speed_index"
                                   value="@isset($product){{ $product->speed_index }}@endisset">
                        </div>
                    </div>

                    <div class="input-group row" id="increased_load">
                        <label for="another_player" class="col-sm-2 col-form-label">Повышенная грузоподъемность:</label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'increased_lifting_capacity'])
                            <input type="text" class="form-control" name="increased_lifting_capacity" id="increased_lifting_capacity"
                                   value="@isset($product){{ $product->increased_lifting_capacity }}@endisset">
                        </div>
                    </div>

                    <div class="input-group row" id="RunFlat">
                        <label for="another_player" class="col-sm-2 col-form-label">Технология RunFlat:</label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'RunFlat_technology'])
                            <input type="text" class="form-control" name="RunFlat_technology" id="RunFlat_technology"
                                   value="@isset($product){{ $product->RunFlat_technology }}@endisset">
                        </div>
                    </div>

                    <div class="input-group row" id="type_of_transport">
                        <label for="another_player" class="col-sm-2 col-form-label">Тип транспортного средства:</label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'vehicle_type'])
                            <input type="text" class="form-control" name="vehicle_type" id="vehicle_type"
                                   value="@isset($product){{ $product->vehicle_type }}@endisset">
                        </div>
                    </div>

                    <div class="input-group row" id="design">
                        <label for="another_player" class="col-sm-2 col-form-label">Конструкция:</label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'design'])
                            <input type="text" class="form-control" name="design" id="design"
                                   value="@isset($product){{ $product->design }}@endisset">
                        </div>
                    </div>

                    <div class="input-group row" id="sealing_method">
                        <label for="another_player" class="col-sm-2 col-form-label">Способ герметизации:</label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'sealing_method'])
                            <input type="text" class="form-control" name="sealing_method" id="sealing_method"
                                   value="@isset($product){{ $product->sealing_method }}@endisset">
                        </div>
                    </div>
<!--
                <div class="input-group row">
                    <label for="kinopoisk_id" class="col-sm-2 col-form-label">Кинопоиск АЙ-ДИ:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'kinopoisk_id'])
                        <input type="text" class="form-control" name="kinopoisk_id" id="kinopoisk_id"
                               value="@isset($product){{ $product->kinopoisk_id }}@endisset">
                    </div>
                </div>
-->
                <div class="input-group row">
                    <label for="title" class="col-sm-2 col-form-label">Тайтл. Название для поисковика:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'title'])
                        <input type="text" class="form-control" name="title" id="title"
                               value="@isset($product){{ $product->title }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="meta_description" class="col-sm-2 col-form-label">Мета-тег description:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'meta_description'])
                        <input type="text" class="form-control" name="meta_description" id="meta_description"
                               value="@isset($product){{ $product->meta_description }}@endisset">
                    </div>
                </div>

                    <div class="input-group row">
                    <label for="social_networks_title" class="col-sm-2 col-form-label">Тайтл. Для соц. сетей:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'social_networks_title'])
                        <input type="text" class="form-control" name="social_networks_title" id="social_networks_title"
                               value="@isset($product){{ $product->social_networks_title }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="social_networks_url" class="col-sm-2 col-form-label">URL Для соц. сетей:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'social_networks_url'])
                        <input type="text" class="form-control" name="social_networks_url" id="social_networks_url"
                               value="@isset($product){{ $product->social_networks_url }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="social_networks_description" class="col-sm-2 col-form-label">Описание сериала: для соц. сетей:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'social_networks_description'])
                        <input type="text" class="form-control" name="social_networks_description" id="social_networks_description"
                               value="@isset($product){{ $product->social_networks_description }}@endisset">
                    </div>
                </div>
                    <div class="input-group row">
                        <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'discription'])
                            <textarea name="discription" id="description" cols="72"
                                      rows="7">@isset($product){{ $product->discription }}@endisset</textarea>
                        </div>
                    </div>
                    <div class="input-group row">
                        <label for="image" class="col-sm-2 col-form-label">Картинка МАЛЕНЬКАЯ: </label>
                        <div class="col-sm-10">
                            <label class="btn btn-default btn-file">
                                Загрузить <input type="file"  name="image" id="image">
                            </label>
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="logo_image" class="col-sm-2 col-form-label">Картинка БОЛЬШАЯ: </label>
                        <div class="col-sm-10">
                            <label class="btn btn-default btn-file">
                                Загрузить <input type="file"  name="logo_image" id="logo_image">
                            </label>
                        </div>
                    </div>

                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    </div>
                </div>
                <br>
                @foreach ([
                      'summer' => 'Лето',
                      'winter' => 'Зима',
                      'R13' => 'R13',
                      'R14' => 'R14',
                      'R15' => 'R15',
                      'R16' => 'R16',
                      'R17' => 'R17',
                      'R18' => 'R18',
                      'R19' => 'R19',
                      'R20' => 'R20',
               'Filter175X65' => 'Filter175X65',
                      'Filter175X70' => 'Filter175X70',
                      'Filter185X60' => 'Filter185X60',
                      'Filter185X65' => 'Filter185X65',
                      'Filter195X60' => 'Filter195X60',
                      'Filter195X65' => 'Filter195X65',
                      'Filter205X55' => 'Filter205X55',
                      'Filter205X60' => 'Filter205X60',
                      'Filter215X55' => 'Filter215X55',
                      'Filter215X60' => 'Filter215X60',
                      'Filter215X65' => 'Filter215X65',
                      'Filter225X55' => 'Filter225X55',
                      'Filter225X60' => 'Filter225X60',
                      'Filter235X55' => 'Filter235X55',
                      'Filter235X60' => 'Filter235X60',
                                ] as $field => $title
                                )
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">{{ $title }}: </label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="{{$field}}" id="{{$field}}"
                                   @if(isset($product) && $product->$field == 1)
                                   checked="'checked"
                                @endif>
                        </div>
                    </div>

                    <br>
                @endforeach
                    <h2>Диски</h2>
                @foreach ([
            'Molten' => 'Литой',
            'Repousse' => 'Штампованный',
            'Radius13' => 'Радиус 13',
     'Radius14' => 'Радиус 14',
   'Radius15' => 'Радиус 15',
   'Radius16' => 'Радиус 16',
       'Radius17' => 'Радиус 17',
       'mounting_holes_4' => '4',
        'mounting_holes_5' => '5',
        'hole_diameter_98' => 'Диаметр крепежных отверстий 98',
    'hole_diameter_100' => 'Диаметр крепежных отверстий 100',
    'hole_diameter_105' => 'Диаметр крепежных отверстий 105',
     'hole_diameter_108' => 'Диаметр крепежных отверстий 108',
      'hole_diameter_110' => 'Диаметр крепежных отверстий 110',
      'hole_diameter_112' => 'Диаметр крепежных отверстий 112',
       'hole_diameter_114_3' => 'Диаметр крепежных отверстий 114.3',
    'hole_diameter_139' => 'Диаметр крепежных отверстий 139',
    'center_hole_diameter_58_6' => 'Диаметр центрального отверстия 58.6',
    'center_hole_diameter_60_1' => 'Диаметр центрального отверстия 60.1',
      'center_hole_diameter_66_1' => 'Диаметр центрального отверстия 66.1',
    'center_hole_diameter_98_1' => 'Диаметр центрального отверстия 98.1',
            ] as $field => $title)
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">{{ $title }}: </label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="{{$field}}" id="{{$field}}"
                                   @if(isset($product) && $product->$field == 1)
                                   checked="'checked"
                                @endif
                            >
                        </div>
                    </div>
                    <br>
                @endforeach



                <button class="btn btn-success btn-fixed">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
