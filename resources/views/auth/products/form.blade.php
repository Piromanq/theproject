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
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Год: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'release_date'])
                        <input type="text" class="form-control" name="release_date" id="release_date"
                               value="@isset($product){{ $product->release_date }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="ChannelImg" class="col-sm-2 col-form-label">Путь к картинке канала (HBO): </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'ChannelImg'])
                        <input type="text" class="form-control" name="ChannelImg" id="ChannelImg"
                               value="@isset($product){{ $product->ChannelImg }}@endisset">
                    </div>
                </div>

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

                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Канал: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'Channel'])
                        <input type="text" class="form-control" name="Channel" id="Channel"
                               value="@isset($product){{ $product->Channel }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Страна: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'Country'])
                        <input type="text" class="form-control" name="Country" id="Country"
                               value="@isset($product){{ $product->Country }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Режиссеры: </label>
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
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'name'])
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($product){{ $product->name }}@endisset">
                    </div>
                </div>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
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
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'discription'])
                        <textarea name="discription" id="description" cols="72"
                                  rows="7">@isset($product){{ $product->discription }}@endisset</textarea>
                    </div>
                </div>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка ПОСТЕР: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file"  name="image" id="image">
                        </label>
                    </div>
                </div>

                <div class="input-group row">
                    <label for="logo_image" class="col-sm-2 col-form-label">Картинка ЛОГО: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file"  name="logo_image" id="logo_image">
                        </label>
                    </div>
                </div>

                <div class="input-group row">
                    <label for="voice_acting" class="col-sm-2 col-form-label">Озвучка:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'voice_acting'])
                        <input type="text" class="form-control" name="voice_acting" id="voice_acting"
                               value="@isset($product){{ $product->voice_acting }}@endisset">
                    </div>
                </div>
                <div class="input-group row">
                    <label for="episode_release_day" class="col-sm-2 col-form-label">День выхода серии:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'episode_release_day'])
                        <input type="text" class="form-control" name="episode_release_day" id="episode_release_day"
                               value="@isset($product){{ $product->episode_release_day }}@endisset">
                    </div>
                </div>
                <div class="input-group row">
                    <label for="number_of_episodes" class="col-sm-2 col-form-label">Кол-во серий в сезоне:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'number_of_episodes'])
                        <input type="text" class="form-control" name="number_of_episodes" id="number_of_episodes"
                               value="@isset($product){{ $product->number_of_episodes }}@endisset">
                    </div>
                </div>
                <div class="input-group row">
                    <label for="genres" class="col-sm-2 col-form-label">Жанры:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'genres'])
                        <input type="text" class="form-control" name="genres" id="genres"
                               value="@isset($product){{ $product->genres }}@endisset">
                    </div>
                </div>

                <div class="input-group row">
                    <label for="kinopoisk_id" class="col-sm-2 col-form-label">Кинопоиск АЙ-ДИ:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'kinopoisk_id'])
                        <input type="text" class="form-control" name="kinopoisk_id" id="kinopoisk_id"
                               value="@isset($product){{ $product->kinopoisk_id }}@endisset">
                    </div>
                </div>

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
                    <label for="player" class="col-sm-2 col-form-label">Плеер:</label>
                    <div class="col-sm-6">
                        @include('auth.leyouts.error', ['fieldName' => 'player'])
                        <input type="text" class="form-control" name="player" id="player"
                               value="@isset($product){{ $product->player }}@endisset">
                    </div>
                </div>

                    <div class="input-group row">
                        <label for="another_player" class="col-sm-2 col-form-label">Альтернативный плеер:</label>
                        <div class="col-sm-6">
                            @include('auth.leyouts.error', ['fieldName' => 'player'])
                            <input type="text" class="form-control" name="another_player" id="another_player"
                                   value="@isset($product){{ $product->another_player }}@endisset">
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


                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    </div>
                </div>
                <br>
                @foreach ([

                                'Action' => 'Боевик',
                                'Western' => 'Вестерн',
                                'Crime' => 'Криминал',
                                 'Detective' => 'Детектив',
                                  'Drama' => 'Драма',
                                   'Historical_film' => 'Исторический сериал',
                                    'Comedy' => 'Комедия',
    'Melodrama' => 'Мелодрама',  'Musical_film' => 'Музыкальный',
     'Thriller' => 'Триллер',
      'Fantastic_movie' => 'Фантастика',
       'Horror' => 'Ужасы',
       'Catastrophe_movie' => 'Катастрофа',
        'Russian_serials' => 'Русские сериалы',
    'romantic' => 'Романтика',
    'Fantasy' => 'Фэнтези',
    'Zombie_Werewolves_Vampires' => 'Зомби вампиры и оборотни',
     'Sport' => 'Спорт',
      'military' => 'Военный',
       'on_real_events' => 'На реальных событиях',
        'Evil_Spirits_And_Witches' => 'Нечисть и ведьмы',
    'Netflix' => 'Netflix',
                                ] as $field => $title)
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">{{ $title }}: </label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="{{$field}}" id="{{$field}}"
                                   @if(isset($product) && $product->$field === 1)
                                   checked="'checked"
                                @endif
                            >
                        </div>
                    </div>
                    <br>
                @endforeach

                @foreach ([
            'FilmAction' => 'Боевик',
            'FilmWestern' => 'Вестерн',
            'FilmCrime' => 'Криминал',
     'FilmDetective' => 'Детектив',
      'FilmDrama' => 'Драма',
      'FilmHistorical_film' => 'Исторический фильм',
       'FilmComedy' => 'Комедия',
       'FilmMelodrama' => 'Мелодрама',  'FilmMusical_film' => 'Музыкальный фильм',
        'FilmTragedy' => 'Трагедия',
    'FilmTragicomedy' => 'Трагикомедия',  'FilmThriller' => 'Триллер',
     'FilmFantastic_movie' => 'Фантастический фильм',  'FilmHorror' => 'Фильм ужасов',
      'FilmCatastrophe_movie' => 'Фильм-катастрофа',  'Film_romantic' => 'Романтика',
    'FilmFantasy' => 'Фэнтези', 'FilmZombie_Werewolves_Vampires' => 'Зомби вампиры и оборотни',
    'FilmSport' => 'Спорт',  'Film_military' => 'Военный',
    'Film_on_real_events' => 'На реальных событиях',
            ] as $field => $title)
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">{{ $title }}: </label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="{{$field}}" id="{{$field}}"
                                   @if(isset($product) && $product->$field === 1)
                                   checked="'checked"
                                @endif
                            >
                        </div>
                    </div>
                    <br>
                @endforeach


                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
