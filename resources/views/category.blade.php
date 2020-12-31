@extends('layouts.master')

@section('title', 'Оформление заказан')

@section('content')
    @if(session()->has('success'))
        {{session()->forget('success')}}
        <div class="alert-success">{{session()->get('success')}}</div>

    @endif


        <h1>Вы в категории:   {{$category->name}} <span class="ProductCount">
                @if($category->id === 1)
                <br>Количество сериалов: {{$category->products->count()}}</span>
            @endif
            @if($category->id === 2)
                <br>Количество фильмов: {{$category->products->count()}}</span>
                @endif
        </h1>

<h2 class="discription-category">{{$category->discription}}</h2>
        <div class="row">
            <div class="right_block checkbox_block">
                <form name="Choses" method="GET" action="{{route('genres')}}">


                            @if($category->id == 1)
                        <div class="col-sm-2 col-md-2">
                 <input style="display:none" type="checkbox" name="Action" onclick="isChecked();" id="Action" @if(request()->has('Action')) checked @endif>Боевик
                                <label for="Action" class="toggle"><span></span></label>
                        </div>
                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Western" onclick="isChecked();" id="Western" @if(request()->has('Western')) checked @endif>Вестерн
                            <label for="Western" class="toggle"><span></span></label>
                        </div>
                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Crime" onclick="isChecked();" id="Crime" @if(request()->has('Crime')) checked @endif>Криминал
                            <label for="Crime" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Detective" onclick="isChecked();" id="Detective" @if(request()->has('Detective')) checked @endif>Детектив
                            <label for="Detective" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Drama" onclick="isChecked();" id="Drama" @if(request()->has('Drama')) checked @endif>Драма
                            <label for="Drama" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Historical_film" onclick="isChecked();" id="Historical_film" @if(request()->has('Historical_film')) checked @endif>История
                            <label for="Historical_film" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Comedy" onclick="isChecked();" id="Comedy" @if(request()->has('Comedy')) checked @endif>Комедия
                            <label for="Comedy" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Melodrama" onclick="isChecked();" id="Melodrama" @if(request()->has('Melodrama')) checked @endif>Мелодрама
                            <label for="Melodrama" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Musical_film" onclick="isChecked();" id="Musical_film" @if(request()->has('Musical_film')) checked @endif>Музыка
                            <label for="Musical_film" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Thriller" onclick="isChecked();" id="Thriller" @if(request()->has('Thriller')) checked @endif>Триллер
                            <label for="Thriller" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Fantastic_movie" onclick="isChecked();" id="Fantastic_movie" @if(request()->has('Fantastic_movie')) checked @endif>Фантастика
                            <label for="Fantastic_movie" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Horror" onclick="isChecked();" id="Horror" @if(request()->has('Horror')) checked @endif>Ужасы
                            <label for="Horror" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Catastrophe_movie" onclick="isChecked();" id="Catastrophe_movie" @if(request()->has('Catastrophe_movie')) checked @endif>Катастрофа
                            <label for="Catastrophe_movie" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Russian_serials" onclick="isChecked();" id="Russian_serials" @if(request()->has('Russian_serials')) checked @endif>Русские сериал
                            <label for="Russian_serials" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="romantic" onclick="isChecked();" id="romantic" @if(request()->has('romantic')) checked @endif>Романтика
                            <label for="romantic" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Fantasy" onclick="isChecked();" id="Fantasy" @if(request()->has('Fantasy')) checked @endif>Фэнтези
                            <label for="Fantasy" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Zombie_Werewolves_Vampires" onclick="isChecked();" id="Zombie_Werewolves_Vampires" @if(request()->has('Zombie_Werewolves_Vampires')) checked @endif>Зомби, вампиры и оборотни
                            <label for="Zombie_Werewolves_Vampires" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Sport" onclick="isChecked();" id="Sport" @if(request()->has('Sport')) checked @endif>Спорт
                            <label for="Sport" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="military" onclick="isChecked();" id="military" @if(request()->has('military')) checked @endif>Военный
                            <label for="military" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="on_real_events" onclick="isChecked();" id="on_real_events" @if(request()->has('on_real_events')) checked @endif>На реальных событиях
                            <label for="on_real_events" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Evil_Spirits_And_Witches" onclick="isChecked();" id="Evil_Spirits_And_Witches" @if(request()->has('Evil_Spirits_And_Witches')) checked @endif>Нечисть и ведьмы
                            <label for="Evil_Spirits_And_Witches" class="toggle"><span></span></label>
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input style="display:none" type="checkbox" name="Netflix" onclick="isChecked();" id="Netflix" @if(request()->has('Netflix')) checked @endif>Netflix
                            <label for="Netflix" class="toggle"><span></span></label>
                        </div>

                        <div class="filter-ButtonGroup">

                            <button type="submit" id="throwOnn" disabled="disabled" class="btn btn-success">Фильтровать</button>
                            <a id="throwOff" class="btn btn-secondary hide" onclick="isOn();">Сбросить фильтры</a>
                        </div>

                                    <script>
                               function isChecked() {
                                   var Action = document.getElementById('Action').checked;
                                    var Western = document.getElementById('Western').checked;
                                   var Crime = document.getElementById('Crime').checked;
                                   var Detective = document.getElementById('Detective').checked;
                                   var Drama = document.getElementById('Drama').checked;
                                   var Historical_film = document.getElementById('Historical_film').checked;
                                   var Comedy = document.getElementById('Comedy').checked;
                                   var Melodrama = document.getElementById('Melodrama').checked;
                                   var Musical_film = document.getElementById('Musical_film').checked;
                                   var Thriller = document.getElementById('Thriller').checked;
                                   var Fantastic_movie = document.getElementById('Fantastic_movie').checked;
                                   var Horror = document.getElementById('Horror').checked;
                                   var Catastrophe_movie = document.getElementById('Catastrophe_movie').checked;
                                   var Russian_serials = document.getElementById('Russian_serials').checked;
                                   var romantic = document.getElementById('romantic').checked;
                                   var Fantasy = document.getElementById('Fantasy').checked;
                                   var Zombie_Werewolves_Vampires = document.getElementById('Zombie_Werewolves_Vampires').checked;
                                   var Sport = document.getElementById('Sport').checked;
                                   var military = document.getElementById('military').checked;
                                   var on_real_events = document.getElementById('on_real_events').checked;
                                   var Evil_Spirits_And_Witches = document.getElementById('Evil_Spirits_And_Witches').checked;
                                   var Netflix = document.getElementById('Netflix').checked;
                                   var hide = document.getElementById('throwOff');

                                   hide.classList.add("hide");

                                    if(Action === false && Western === false && Crime === false && Detective === false && Drama === false && Historical_film === false
                                        && Comedy === false && Melodrama === false && Musical_film === false && Thriller === false && Fantastic_movie === false && Horror === false
                                        && Catastrophe_movie === false && Russian_serials === false && romantic === false && Fantasy === false && Zombie_Werewolves_Vampires === false && Sport === false
                                        && military === false && on_real_events === false && Evil_Spirits_And_Witches === false && Netflix === false){
                                        document.getElementById('throwOnn').setAttribute("disabled", "disabled");
                                        return false;
                                    }else{
                                        document.getElementById('throwOnn').removeAttribute("disabled");
                                        hide.classList.remove("hide");

                                        return true;
                                    }
                               }

                               function isOn (){
                                   var Action = document.getElementById('Action').checked = false;
                                   var Western = document.getElementById('Western').checked = false;
                                   var Crime = document.getElementById('Crime').checked = false;
                                   var Detective = document.getElementById('Detective').checked = false;
                                   var Drama = document.getElementById('Drama').checked = false;
                                   var Historical_film = document.getElementById('Historical_film').checked = false;
                                   var Comedy = document.getElementById('Comedy').checked = false;
                                   var Melodrama = document.getElementById('Melodrama').checked = false;
                                   var Musical_film = document.getElementById('Musical_film').checked = false;
                                   var Thriller = document.getElementById('Thriller').checked = false;
                                   var Fantastic_movie = document.getElementById('Fantastic_movie').checked = false;
                                   var Horror = document.getElementById('Horror').checked = false;
                                   var Catastrophe_movie = document.getElementById('Catastrophe_movie').checked = false;
                                   var Russian_serials = document.getElementById('Russian_serials').checked = false;
                                   var romantic = document.getElementById('romantic').checked = false;
                                   var Fantasy = document.getElementById('Fantasy').checked = false;
                                   var Zombie_Werewolves_Vampires = document.getElementById('Zombie_Werewolves_Vampires').checked = false;
                                   var Sport = document.getElementById('Sport').checked = false;
                                   var military = document.getElementById('military').checked = false;
                                   var on_real_events = document.getElementById('on_real_events').checked = false;
                                   var Evil_Spirits_And_Witches = document.getElementById('Evil_Spirits_And_Witches').checked = false;
                                   var Netflix = document.getElementById('Netflix').checked = false;
                                   var hide = document.getElementById('throwOff');
                                   hide.classList.add("hide");

                                   if(Action === false && Western === false && Crime === false && Detective === false && Drama === false && Historical_film === false
                                       && Comedy === false && Melodrama === false && Musical_film === false && Thriller === false && Fantastic_movie === false && Horror === false
                                       && Catastrophe_movie === false && Russian_serials === false && romantic === false && Fantasy === false && Zombie_Werewolves_Vampires === false && Sport === false
                                       && military === false && on_real_events === false && Evil_Spirits_And_Witches === false && Netflix === false){
                                       document.getElementById('throwOnn').setAttribute("disabled", "disabled");

                                       return false;
                                   }else{
                                       document.getElementById('throwOnn').removeAttribute("disabled");
                                       hide.classList.remove("hide");
                                       return true;
                                   }
                               }

                                </script>


                            @endif
                            @if($category->id == 2)

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmAction" onclick="isCheckedFilm();" id="FilmAction" @if(request()->has('FilmAction')) checked @endif>Боевик
                                        <label for="FilmAction" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmWestern" onclick="isCheckedFilm();" id="FilmWestern" @if(request()->has('FilmWestern')) checked @endif>Вестерн
                                        <label for="FilmWestern" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmCrime" onclick="isCheckedFilm();" id="FilmCrime" @if(request()->has('FilmCrime')) checked @endif>Криминал
                                        <label for="FilmCrime" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmDrama" onclick="isCheckedFilm();" id="FilmDrama" @if(request()->has('FilmDrama')) checked @endif>Драма
                                        <label for="FilmDrama" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmHistorical_film" onclick="isCheckedFilm();" id="FilmHistorical_film" @if(request()->has('FilmHistorical_film')) checked @endif>История
                                        <label for="FilmHistorical_film" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmComedy" onclick="isCheckedFilm();" id="FilmComedy" @if(request()->has('FilmComedy')) checked @endif>Комедия
                                        <label for="FilmComedy" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmMelodrama" onclick="isCheckedFilm();" id="FilmMelodrama" @if(request()->has('FilmMelodrama')) checked @endif>Мелодрама
                                        <label for="FilmMelodrama" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmMusical_film" onclick="isCheckedFilm();" id="FilmMusical_film" @if(request()->has('FilmMusical_film')) checked @endif>Музыка
                                        <label for="FilmMusical_film" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmTragedy" onclick="isCheckedFilm();" id="FilmTragedy" @if(request()->has('FilmTragedy')) checked @endif>Трагедия
                                        <label for="FilmTragedy" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmTragicomedy" onclick="isCheckedFilm();" id="FilmTragicomedy" @if(request()->has('FilmTragicomedy')) checked @endif>Трагикомедия
                                        <label for="FilmTragicomedy" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmThriller" onclick="isCheckedFilm();" id="FilmThriller" @if(request()->has('FilmThriller')) checked @endif>Триллер
                                        <label for="FilmThriller" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmFantastic_movie" onclick="isCheckedFilm();" id="FilmFantastic_movie" @if(request()->has('FilmFantastic_movie')) checked @endif>Фантастика
                                        <label for="FilmFantastic_movie" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmHorror" onclick="isCheckedFilm();" id="FilmHorror" @if(request()->has('FilmHorror')) checked @endif>Ужасы
                                        <label for="FilmHorror" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmCatastrophe_movie" onclick="isCheckedFilm();" id="FilmCatastrophe_movie" @if(request()->has('FilmCatastrophe_movie')) checked @endif>Катастрофа
                                        <label for="FilmCatastrophe_movie" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="Film_romantic" onclick="isCheckedFilm();" id="Film_romantic" @if(request()->has('Film_romantic')) checked @endif>Романтика
                                        <label for="Film_romantic" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmFantasy" onclick="isCheckedFilm();" id="FilmFantasy" @if(request()->has('FilmFantasy')) checked @endif>Фэнтези
                                        <label for="FilmFantasy" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmZombie_Werewolves_Vampires" onclick="isCheckedFilm();" id="FilmZombie_Werewolves_Vampires" @if(request()->has('FilmZombie_Werewolves_Vampires')) checked @endif>Зомби, вампиры и оборотни
                                        <label for="FilmZombie_Werewolves_Vampires" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="FilmSport" onclick="isCheckedFilm();" id="FilmSport" @if(request()->has('FilmSport')) checked @endif>Спорт
                                        <label for="FilmSport" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="Film_military" onclick="isCheckedFilm();" id="Film_military" @if(request()->has('Film_military')) checked @endif>Военный
                                        <label for="Film_military" class="toggle"><span></span></label>
                                    </div>

                                    <div class="col-sm-2 col-md-2">
                                        <input style="display:none" type="checkbox" name="Film_on_real_events" onclick="isCheckedFilm();" id="Film_on_real_events" @if(request()->has('Film_on_real_events')) checked @endif>На реальных событиях
                                        <label for="Film_on_real_events" class="toggle"><span></span></label>
                                    </div>

                                    <div class="filter-ButtonGroup">
                                        <button type="submit" id="throwOnn" disabled="disabled" class="btn btn-success">Фильтровать</button>
                                        <a id="throwOff" class="btn btn-secondary hide" onclick="isOnFilm();">Сбросить фильтры</a>
                                    </div>

                                    <script>
                                        function isCheckedFilm() {
                                            var FilmAction = document.getElementById('FilmAction').checked;
                                            var FilmWestern = document.getElementById('FilmWestern').checked;
                                            var FilmCrime = document.getElementById('FilmCrime').checked;
                                            var FilmDrama = document.getElementById('FilmDrama').checked;
                                            var FilmHistorical_film = document.getElementById('FilmHistorical_film').checked;
                                            var FilmComedy = document.getElementById('FilmComedy').checked;
                                            var FilmMelodrama = document.getElementById('FilmMelodrama').checked;
                                            var FilmMusical_film = document.getElementById('FilmMusical_film').checked;
                                            var FilmTragedy = document.getElementById('FilmTragedy').checked;
                                            var FilmTragicomedy = document.getElementById('FilmTragicomedy').checked;
                                            var FilmThriller = document.getElementById('FilmThriller').checked;
                                            var FilmFantastic_movie = document.getElementById('FilmFantastic_movie').checked;
                                            var FilmHorror = document.getElementById('FilmHorror').checked;
                                            var FilmCatastrophe_movie = document.getElementById('FilmCatastrophe_movie').checked;
                                            var Film_romantic = document.getElementById('Film_romantic').checked;
                                            var FilmFantasy = document.getElementById('FilmFantasy').checked;
                                            var FilmZombie_Werewolves_Vampires = document.getElementById('FilmZombie_Werewolves_Vampires').checked;
                                            var FilmSport = document.getElementById('FilmSport').checked;
                                            var Film_military = document.getElementById('Film_military').checked;
                                            var Film_on_real_events = document.getElementById('Film_on_real_events').checked;
                                            var hide = document.getElementById('throwOff');
                                            hide.classList.add("hide");

                                            if(FilmAction === false && FilmWestern === false && FilmCrime === false && FilmDrama === false && FilmHistorical_film === false && FilmComedy === false && FilmMelodrama === false && FilmMusical_film === false
                                                && FilmTragedy === false && FilmTragicomedy === false && FilmThriller === false && FilmFantastic_movie === false && FilmHorror === false && FilmCatastrophe_movie === false
                                                && Film_romantic === false && FilmFantasy === false && FilmZombie_Werewolves_Vampires === false && FilmSport === false && Film_military === false && Film_on_real_events === false){
                                                document.getElementById('throwOnn').setAttribute("disabled", "disabled");
                                                return false;
                                            }else{
                                                    document.getElementById('throwOnn').removeAttribute("disabled");
                                                    hide.classList.remove("hide");
                                                    return true;
                                                }

                                        }

                                        function isOnFilm (){
                                            var FilmAction = document.getElementById('FilmAction').checked = false;
                                            var FilmWestern = document.getElementById('FilmWestern').checked = false;
                                            var FilmCrime = document.getElementById('FilmCrime').checked = false;
                                            var FilmDrama = document.getElementById('FilmDrama').checked = false;
                                            var FilmHistorical_film = document.getElementById('FilmHistorical_film').checked = false;
                                            var FilmComedy = document.getElementById('FilmComedy').checked = false;
                                            var FilmMelodrama = document.getElementById('FilmMelodrama').checked = false;
                                            var FilmMusical_film = document.getElementById('FilmMusical_film').checked = false;
                                            var FilmTragedy = document.getElementById('FilmTragedy').checked = false;
                                            var FilmTragicomedy = document.getElementById('FilmTragicomedy').checked = false;
                                            var FilmThriller = document.getElementById('FilmThriller').checked = false;
                                            var FilmFantastic_movie = document.getElementById('FilmFantastic_movie').checked = false;
                                            var FilmHorror = document.getElementById('FilmHorror').checked = false;
                                            var FilmCatastrophe_movie = document.getElementById('FilmCatastrophe_movie').checked = false;
                                            var Film_romantic = document.getElementById('Film_romantic').checked = false;
                                            var FilmFantasy = document.getElementById('FilmFantasy').checked = false;
                                            var FilmZombie_Werewolves_Vampires = document.getElementById('FilmZombie_Werewolves_Vampires').checked = false;
                                            var FilmSport = document.getElementById('FilmSport').checked = false;
                                            var Film_military = document.getElementById('Film_military').checked = false;
                                            var Film_on_real_events = document.getElementById('Film_on_real_events').checked = false;
                                            var hide = document.getElementById('throwOff');
                                            hide.classList.add("hide");

                                            if(FilmAction === false && FilmWestern === false && FilmCrime === false && FilmDrama === false && FilmHistorical_film === false && FilmComedy === false && FilmMelodrama === false && FilmMusical_film === false
                                                && FilmTragedy === false && FilmTragicomedy === false && FilmThriller === false && FilmFantastic_movie === false && FilmHorror === false && FilmCatastrophe_movie === false
                                                && Film_romantic === false && FilmFantasy === false && FilmZombie_Werewolves_Vampires === false && FilmSport === false && Film_military === false && Film_on_real_events === false){
                                                document.getElementById('throwOnn').setAttribute("disabled", "disabled");

                                                return false;
                                            }else{
                                                document.getElementById('throwOnn').removeAttribute("disabled");
                                                hide.classList.remove("hide");
                                                return true;
                                            }
                                        }


                                    </script>

                            @endif


                </form>
            </div>
            {{$products->links()}}
            @foreach($products as $product)
                @include('card', compact('product'))
            @endforeach

</div>

@endsection
