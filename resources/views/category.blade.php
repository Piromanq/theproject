@extends('layouts.master')

@section('title', 'Оформление заказан')

@section('content')
    @if(session()->has('success'))
        {{session()->forget('success')}}
        <div class="alert-success">{{session()->get('success')}}</div>

    @endif


        <h1>Вы в категории:   {{$category->name}} <span class="ProductCount">
                @if($category->id === 1)
                <br>Количество Шин: {{$category->products->count()}}</span>
            @endif
            @if($category->id === 2)
                <br>Количество Дисков: {{$category->products->count()}}</span>
                @endif
        </h1>

<h2 class="discription-category">{{$category->discription}}</h2>
    @if($category->id === 1)
        <h1>Выберите радиус и размер</h1>
        @endif
    @if($category->id === 2)
        <h1>Выберите разболтовку</h1>
    @endif
        <div class="row">
            <div class="right_block checkbox_block">
                <form name="Choses" method="GET" action="{{route('genres')}}">


                            @if($category->id == 1)
                                <div class="main_wrapper__section">
                        <div class="select another_width_radius">
                            <span>Радиус</span>
                            <div class="checkselect">
                                <label>       <input style="display:none" type="checkbox" name="R13" onclick="isChecked();" id="R13" @if(request()->has('R13')) checked @endif>R13
                                    <label for="R13" class="toggle"><span></span></label></label>

                                <label>   <input style="display:none" type="checkbox" name="R14" onclick="isChecked();" id="R14" @if(request()->has('R14')) checked @endif>R14
                                    <label for="R14" class="toggle"><span></span></label></label>

                                    <label>         <input style="display:none" type="checkbox" name="R15" onclick="isChecked();" id="R15" @if(request()->has('R15')) checked @endif>R15
                                        <label for="R15" class="toggle"><span></span></label></label>

                                        <label>        <input style="display:none" type="checkbox" name="R16" onclick="isChecked();" id="R16" @if(request()->has('R16')) checked @endif>R16
                                            <label for="R16" class="toggle"><span></span></label></label>

                                            <label>           <input style="display:none" type="checkbox" name="R17" onclick="isChecked();" id="R17" @if(request()->has('R17')) checked @endif>R17
                                                <label for="R17" class="toggle"><span></span></label></label>

                                                <label>        <input style="display:none" type="checkbox" name="R18" onclick="isChecked();" id="R18" @if(request()->has('R18')) checked @endif>R18
                                                    <label for="R18" class="toggle"><span></span></label></label>

                                                    <label>        <input style="display:none" type="checkbox" name="R19" onclick="isChecked();" id="R19" @if(request()->has('R19')) checked @endif>R19
                                                        <label for="R19" class="toggle"><span></span></label></label>

                                <label>           <input style="display:none" type="checkbox" name="R20" onclick="isChecked();" id="R20" @if(request()->has('R20')) checked @endif>R20
                                    <label for="R20" class="toggle"><span></span></label></label>
                            </div>
                        </div>

                        <div class="select another_width__type">
                            <span>Профиль, %</span>
                            <div class="checkselect">
                                <label>           <input style="display:none" type="checkbox" name="Filter175X65" onclick="isChecked();" id="Filter175X65" @if(request()->has('Filter175X65')) checked @endif>175/65
                                    <label for="Filter175X65" class="toggle"><span></span></label></label>

                                <label>                <input style="display:none" type="checkbox" name="Filter175X70" onclick="isChecked();" id="Filter175X70" @if(request()->has('Filter175X70')) checked @endif>175/70
                                    <label for="Filter175X70" class="toggle"><span></span></label></label>

                                    <label>        <input style="display:none" type="checkbox" name="Filter185X60" onclick="isChecked();" id="Filter185X60" @if(request()->has('Filter185X60')) checked @endif>185/60
                                        <label for="Filter185X60" class="toggle"><span></span></label></label>

                                    <label>           <input style="display:none" type="checkbox" name="Filter185X65" onclick="isChecked();" id="Filter185X65" @if(request()->has('Filter185X65')) checked @endif>185/65
                                        <label for="Filter185X65" class="toggle"><span></span></label></label>

                                    <label>                <input style="display:none" type="checkbox" name="Filter195X60" onclick="isChecked();" id="Filter195X60" @if(request()->has('Filter195X60')) checked @endif>195/60
                                        <label for="Filter195X60" class="toggle"><span></span></label></label>

                                    <label>            <input style="display:none" type="checkbox" name="Filter195X65" onclick="isChecked();" id="Filter195X65" @if(request()->has('Filter195X65')) checked @endif>195/65
                                        <label for="Filter195X65" class="toggle"><span></span></label></label>

                                    <label>                    <input style="display:none" type="checkbox" name="Filter205X55" onclick="isChecked();" id="Filter205X55" @if(request()->has('Filter205X55')) checked @endif>205/55
                                        <label for="Filter205X55" class="toggle"><span></span></label></label>

                                    <label>                <input style="display:none" type="checkbox" name="Filter205X60" onclick="isChecked();" id="Filter205X60" @if(request()->has('Filter205X60')) checked @endif>205/60
                                        <label for="Filter205X60" class="toggle"><span></span></label></label>

                                    <label>             <input style="display:none" type="checkbox" name="Filter215X55" onclick="isChecked();" id="Filter215X55" @if(request()->has('Filter215X55')) checked @endif>215/55
                                        <label for="Filter215X55" class="toggle"><span></span></label></label>

                                    <label>               <input style="display:none" type="checkbox" name="Filter215X60" onclick="isChecked();" id="Filter215X60" @if(request()->has('Filter215X60')) checked @endif>215/60
                                        <label for="Filter215X60" class="toggle"><span></span></label></label>

                                <label>             <input style="display:none" type="checkbox" name="Filter215X65" onclick="isChecked();" id="Filter215X65" @if(request()->has('Filter215X65')) checked @endif>215/65
                                    <label for="Filter215X65" class="toggle"><span></span></label></label>

                                    <label>               <input style="display:none" type="checkbox" name="Filter225X55" onclick="isChecked();" id="Filter225X55" @if(request()->has('Filter225X55')) checked @endif>225/55
                                        <label for="Filter225X55" class="toggle"><span></span></label></label>

                                    <label>           <input style="display:none" type="checkbox" name="Filter225X60" onclick="isChecked();" id="Filter225X60" @if(request()->has('Filter225X60')) checked @endif>225/60
                                        <label for="Filter225X60" class="toggle"><span></span></label></label>

                                    <label>                      <input style="display:none" type="checkbox" name="Filter235X55" onclick="isChecked();" id="Filter235X55" @if(request()->has('Filter235X55')) checked @endif>235/55
                                        <label for="Filter235X55" class="toggle"><span></span></label></label>

                                    <label>              <input style="display:none" type="checkbox" name="Filter235X60" onclick="isChecked();" id="Filter235X60" @if(request()->has('Filter235X60')) checked @endif>235/60
                                        <label for="Filter235X60" class="toggle"><span></span></label></label>
                            </div>
                        </div>

                                    <div class="select another_width__type">
                                        <span>Сезонность</span>
                                        <div class="checkselect">
                                            <label>           <input style="display:none" type="checkbox" name="summer" onclick="isChecked();" id="summer" @if(request()->has('summer')) checked @endif>Лето
                                                <label for="summer" class="toggle"><span></span></label></label>

                                            <label>                <input style="display:none" type="checkbox" name="winter" onclick="isChecked();" id="winter" @if(request()->has('winter')) checked @endif>Зима
                                                <label for="winter" class="toggle"><span></span></label></label>
                                        </div>
                                    </div>
                                </div>
                        <div class="filter-ButtonGroup">

                            <button type="submit" id="throwOnn" disabled="disabled" class="btn btn-success">Фильтровать</button>
                            <a id="throwOff" class="btn btn-secondary hide" onclick="isOn();">Сбросить фильтры</a>
                        </div>

                                    <script>
                               function isChecked() {
                                   var R13 = document.getElementById('R13').checked;
                                    var R14 = document.getElementById('R14').checked;
                                   var R15 = document.getElementById('R15').checked;
                                   var R16 = document.getElementById('R16').checked;
                                   var R17 = document.getElementById('R17').checked;
                                   var R18 = document.getElementById('R18').checked;
                                   var R19 = document.getElementById('R19').checked;
                                   var R20 = document.getElementById('R20').checked;
                                   var Filter175X65 = document.getElementById('Filter175X65').checked;
                                   var Filter175X70 = document.getElementById('Filter175X70').checked;
                                   var Filter185X60 = document.getElementById('Filter185X60').checked;
                                   var Filter185X65 = document.getElementById('Filter185X65').checked;
                                   var Filter195X60 = document.getElementById('Filter195X60').checked;
                                   var Filter195X65 = document.getElementById('Filter195X65').checked;
                                   var Filter205X55 = document.getElementById('Filter205X55').checked;
                                   var Filter205X60 = document.getElementById('Filter205X60').checked;
                                   var Filter215X55 = document.getElementById('Filter215X55').checked;
                                   var Filter215X60 = document.getElementById('Filter215X60').checked;
                                   var Filter215X65 = document.getElementById('Filter215X65').checked;
                                   var Filter225X55 = document.getElementById('Filter225X55').checked;
                                   var Filter225X60 = document.getElementById('Filter225X60').checked;
                                   var Filter235X55 = document.getElementById('Filter235X55').checked;
                                   var Filter235X60 = document.getElementById('Filter235X60').checked;
                                   var summer = document.getElementById('summer').checked;
                                   var winter = document.getElementById('winter').checked;
                                   var hide = document.getElementById('throwOff');

                                   hide.classList.add("hide");

                                    if(R13 === false && R14 === false && R15 === false && R16 === false && R17 === false && R18 === false
                                        && R19 === false && R20 === false && Filter175X65 === false && Filter175X70 === false && Filter185X60 === false && Filter185X65 === false
                                        && Filter195X60 === false && Filter195X65 === false && Filter205X55 === false && Filter205X60 === false && Filter215X55 === false && Filter215X60 === false
                                        && Filter225X55 === false && Filter225X60 === false && Filter235X55 === false && Filter235X60 === false && summer === false
                                        && winter === false && Filter215X65 === false ){
                                        document.getElementById('throwOnn').setAttribute("disabled", "disabled");
                                        return false;
                                    }else{
                                        document.getElementById('throwOnn').removeAttribute("disabled");
                                        hide.classList.remove("hide");

                                        return true;
                                    }
                               }

                               function isOn (){
                                   var R13 = document.getElementById('R13').checked = false;
                                   var R14 = document.getElementById('R14').checked = false;
                                   var R15 = document.getElementById('R15').checked = false;
                                   var R16 = document.getElementById('R16').checked = false;
                                   var R17 = document.getElementById('R17').checked = false;
                                   var R18 = document.getElementById('R18').checked = false;
                                   var R19 = document.getElementById('R19').checked = false;
                                   var R20 = document.getElementById('R20').checked = false;
                                   var Filter175X65 = document.getElementById('Filter175X65').checked = false;
                                   var Filter175X70 = document.getElementById('Filter175X70').checked = false;
                                   var Filter185X60 = document.getElementById('Filter185X60').checked = false;
                                   var Filter185X65 = document.getElementById('Filter185X65').checked = false;
                                   var Filter195X60 = document.getElementById('Filter195X60').checked = false;
                                   var Filter195X65 = document.getElementById('Filter195X65').checked = false;
                                   var Filter205X55 = document.getElementById('Filter205X55').checked = false;
                                   var Filter205X60 = document.getElementById('Filter205X60').checked = false;
                                   var Filter215X55 = document.getElementById('Filter215X55').checked = false;
                                   var Filter215X60 = document.getElementById('Filter215X60').checked = false;
                                   var Filter215X65 = document.getElementById('Filter215X65').checked = false;
                                   var Filter225X55 = document.getElementById('Filter225X55').checked = false;
                                   var Filter225X60 = document.getElementById('Filter225X60').checked = false;
                                   var Filter235X55 = document.getElementById('Filter235X55').checked = false;
                                   var Filter235X60 = document.getElementById('Filter235X60').checked = false;
                                   var summer = document.getElementById('summer').checked = false;
                                   var winter = document.getElementById('winter').checked = false;
                                   var hide = document.getElementById('throwOff');
                                   hide.classList.add("hide");

                                   if(R13 === false && R14 === false && R15 === false && R16 === false && R17 === false && R18 === false
                                       && R19 === false && R20 === false && Filter175X65 === false && Filter175X70 === false && Filter185X60 === false && Filter185X65 === false
                                       && Filter195X60 === false && Filter195X65 === false && Filter205X55 === false && Filter205X60 === false && Filter215X55 === false && Filter215X60 === false
                                       && Filter225X55 === false && Filter225X60 === false && Filter235X55 === false && Filter235X60 === false && summer === false
                                       && winter === false && Filter215X65 === false){
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

                                <div class="main_wrapper__section">
                                    <div class="select another_width__type">
                                        <span>Тип диска</span>
                                        <div class="checkselect">
                                            <label><input style="display:none" type="checkbox" name="Molten" onclick="isCheckedFilm();"
                                                          id="Molten" @if(request()->has('Molten')) checked @endif>Литой
                                                <label for="Molten" class="toggle"><span></span></label></label>

                                            <label><input style="display:none" type="checkbox" name="Repousse" onclick="isCheckedFilm();"
                                                          id="Repousse" @if(request()->has('Repousse')) checked @endif>Штампованный
                                                <label for="Repousse" class="toggle"><span></span></label></label>
                                        </div>
                                    </div>

                                    <div class="select another_width_radius">
                                        <span>Радиус</span>
                                        <div class="checkselect">
                                            <label>         <input style="display:none" type="checkbox" name="Radius13" onclick="isCheckedFilm();" id="Radius13" @if(request()->has('Radius13')) checked @endif>13
                                                <label for="Radius13" class="toggle"><span></span></label></label>

                                            <label>                <input style="display:none" type="checkbox" name="Radius14" onclick="isCheckedFilm();" id="Radius14" @if(request()->has('Radius14')) checked @endif>14
                                                <label for="Radius14" class="toggle"><span></span></label></label>

                                            <label>                 <input style="display:none" type="checkbox" name="Radius15" onclick="isCheckedFilm();" id="Radius15" @if(request()->has('Radius15')) checked @endif>15
                                                <label for="Radius15" class="toggle"><span></span></label></label>

                                            <label>            <input style="display:none" type="checkbox" name="Radius16" onclick="isCheckedFilm();" id="Radius16" @if(request()->has('Radius16')) checked @endif>16
                                                <label for="Radius16" class="toggle"><span></span></label></label>

                                            <label>                 <input style="display:none" type="checkbox" name="Radius17" onclick="isCheckedFilm();" id="Radius17" @if(request()->has('Radius17')) checked @endif>17
                                                <label for="Radius17" class="toggle"><span></span></label></label>
                                        </div>
                                    </div>

                                    <div class="select another_width__number_holes">
                                        <span>Кол-во отверстий</span>
                                        <div class="checkselect">
                                            <label>         <input style="display:none" type="checkbox" name="mounting_holes_4" onclick="isCheckedFilm();" id="mounting_holes_4" @if(request()->has('mounting_holes_4')) checked @endif>4
                                                <label for="mounting_holes_4" class="toggle"><span></span></label></label>

                                            <label>                <input style="display:none" type="checkbox" name="mounting_holes_5" onclick="isCheckedFilm();" id="mounting_holes_5" @if(request()->has('mounting_holes_5')) checked @endif>5
                                                <label for="mounting_holes_5" class="toggle"><span></span></label></label>
                                        </div>
                                    </div>

                                    <div class="select another_width__pcd">
                                        <span>Диаметр расположения отверстий (PCD), мм</span>
                                        <div class="checkselect">
                                            <label>          <input style="display:none" type="checkbox" name="hole_diameter_98" onclick="isCheckedFilm();" id="hole_diameter_98" @if(request()->has('hole_diameter_98')) checked @endif>98
                                                <label for="hole_diameter_98" class="toggle"><span></span></label></label>

                                            <label>                <input style="display:none" type="checkbox" name="hole_diameter_100" onclick="isCheckedFilm();" id="hole_diameter_100" @if(request()->has('hole_diameter_100')) checked @endif>100
                                                <label for="hole_diameter_100" class="toggle"><span></span></label></label>

                                            <label>           <input style="display:none" type="checkbox" name="hole_diameter_105" onclick="isCheckedFilm();" id="hole_diameter_105" @if(request()->has('hole_diameter_105')) checked @endif>105
                                                <label for="hole_diameter_105" class="toggle"><span></span></label></label>

                                            <label>                        <input style="display:none" type="checkbox" name="hole_diameter_108" onclick="isCheckedFilm();" id="hole_diameter_108" @if(request()->has('hole_diameter_108')) checked @endif>108
                                                <label for="hole_diameter_108" class="toggle"><span></span></label></label>

                                            <label>                 <input style="display:none" type="checkbox" name="hole_diameter_110" onclick="isCheckedFilm();" id="hole_diameter_110" @if(request()->has('hole_diameter_110')) checked @endif>110
                                                <label for="hole_diameter_110" class="toggle"><span></span></label></label>

                                            <label>                <input style="display:none" type="checkbox" name="hole_diameter_112" onclick="isCheckedFilm();" id="hole_diameter_112" @if(request()->has('hole_diameter_112')) checked @endif>112
                                                <label for="hole_diameter_112" class="toggle"><span></span></label></label>

                                            <label>                             <input style="display:none" type="checkbox" name="hole_diameter_114_3" onclick="isCheckedFilm();" id="hole_diameter_114_3" @if(request()->has('hole_diameter_114_3')) checked @endif>114.3
                                                <label for="hole_diameter_114_3" class="toggle"><span></span></label></label>

                                            <label>                              <input style="display:none" type="checkbox" name="hole_diameter_139" onclick="isCheckedFilm();" id="hole_diameter_139" @if(request()->has('hole_diameter_139')) checked @endif>139
                                                <label for="hole_diameter_139" class="toggle"><span></span></label></label>
                                        </div>

                                    </div>

                                    <div class="select another_width__co">
                                        <span>Диаметр центрального отверстия диска, мм</span>
                                        <div class="checkselect">
                                            <label>            <input style="display:none" type="checkbox" name="center_hole_diameter_58_6" onclick="isCheckedFilm();" id="center_hole_diameter_58_6" @if(request()->has('center_hole_diameter_58_6')) checked @endif>58.6
                                                <label for="center_hole_diameter_58_6" class="toggle"><span></span></label></label>

                                            <label>                       <input style="display:none" type="checkbox" name="center_hole_diameter_60_1" onclick="isCheckedFilm();" id="center_hole_diameter_60_1" @if(request()->has('center_hole_diameter_60_1')) checked @endif>60.1
                                                <label for="center_hole_diameter_60_1" class="toggle"><span></span></label></label>

                                            <label>                  <input style="display:none" type="checkbox" name="center_hole_diameter_66_1" onclick="isCheckedFilm();" id="center_hole_diameter_66_1" @if(request()->has('center_hole_diameter_66_1')) checked @endif>66.1
                                                <label for="center_hole_diameter_66_1" class="toggle"><span></span></label></label>

                                            <label>               <input style="display:none" type="checkbox" name="center_hole_diameter_98_1" onclick="isCheckedFilm();" id="center_hole_diameter_98_1" @if(request()->has('center_hole_diameter_98_1')) checked @endif>98.1
                                                <label for="center_hole_diameter_98_1" class="toggle"><span></span></label></label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="filter-ButtonGroup">
                                        <button type="submit" id="throwOnn" disabled="disabled" class="btn btn-success">Фильтровать</button>
                                        <a id="throwOff" class="btn btn-secondary hide" onclick="isOnFilm();">Сбросить фильтры</a>
                                    </div>
                                    <script>
                                        function isCheckedFilm() {
                                            var Molten = document.getElementById('Molten').checked;
                                            var Repousse = document.getElementById('Repousse').checked;
                                            var Radius13 = document.getElementById('Radius13').checked;
                                            var Radius14 = document.getElementById('Radius14').checked;
                                            var Radius15 = document.getElementById('Radius15').checked;
                                            var Radius16 = document.getElementById('Radius16').checked;
                                            var Radius17 = document.getElementById('Radius17').checked;
                                            var mounting_holes_4 = document.getElementById('mounting_holes_4').checked;
                                            var mounting_holes_5 = document.getElementById('mounting_holes_5').checked;
                                            var hole_diameter_98 = document.getElementById('hole_diameter_98').checked;
                                            var hole_diameter_100 = document.getElementById('hole_diameter_100').checked;
                                            var hole_diameter_105 = document.getElementById('hole_diameter_105').checked;
                                            var hole_diameter_108 = document.getElementById('hole_diameter_108').checked;
                                            var hole_diameter_110 = document.getElementById('hole_diameter_110').checked;
                                            var hole_diameter_112 = document.getElementById('hole_diameter_112').checked;
                                            var hole_diameter_114_3 = document.getElementById('hole_diameter_114_3').checked;
                                            var hole_diameter_139 = document.getElementById('hole_diameter_139').checked;
                                            var center_hole_diameter_58_6 = document.getElementById('center_hole_diameter_58_6').checked;
                                            var center_hole_diameter_60_1 = document.getElementById('center_hole_diameter_60_1').checked;
                                            var center_hole_diameter_98_1 = document.getElementById('center_hole_diameter_98_1').checked;
                                            var center_hole_diameter_66_1 = document.getElementById('center_hole_diameter_66_1').checked;
                                            var hide = document.getElementById('throwOff');
                                            hide.classList.add("hide");

                                            if(Molten === false && Repousse === false && Radius13 === false && Radius14 === false && Radius15 === false && Radius16 === false && Radius17 === false && mounting_holes_4 === false
                                                && mounting_holes_5 === false && hole_diameter_98 === false && hole_diameter_100 === false && hole_diameter_105 === false && hole_diameter_108 === false && hole_diameter_110 === false
                                                && hole_diameter_112 === false && hole_diameter_114_3 === false && hole_diameter_139 === false && center_hole_diameter_58_6 === false && center_hole_diameter_60_1 === false
                                                && center_hole_diameter_98_1 === false && center_hole_diameter_66_1 === false
                                            ){
                                                document.getElementById('throwOnn').setAttribute("disabled", "disabled");
                                                return false;
                                            }else{
                                                    document.getElementById('throwOnn').removeAttribute("disabled");
                                                    hide.classList.remove("hide");
                                                    return true;
                                                }

                                        }

                                        function isOnFilm (){
                                            var Molten = document.getElementById('Molten').checked = false;
                                            var Repousse = document.getElementById('Repousse').checked = false;
                                            var Radius13 = document.getElementById('Radius13').checked = false;
                                            var Radius14 = document.getElementById('Radius14').checked = false;
                                            var Radius15 = document.getElementById('Radius15').checked = false;
                                            var Radius16 = document.getElementById('Radius16').checked = false;
                                            var Radius17 = document.getElementById('Radius17').checked = false;
                                            var mounting_holes_4 = document.getElementById('mounting_holes_4').checked = false;
                                            var mounting_holes_5 = document.getElementById('mounting_holes_5').checked = false;
                                            var hole_diameter_98 = document.getElementById('hole_diameter_98').checked = false;
                                            var hole_diameter_100 = document.getElementById('hole_diameter_100').checked = false;
                                            var hole_diameter_105 = document.getElementById('hole_diameter_105').checked = false;
                                            var hole_diameter_108 = document.getElementById('hole_diameter_108').checked = false;
                                            var hole_diameter_110 = document.getElementById('hole_diameter_110').checked = false;
                                            var hole_diameter_112 = document.getElementById('hole_diameter_112').checked = false;
                                            var hole_diameter_114_3 = document.getElementById('hole_diameter_114_3').checked = false;
                                            var hole_diameter_139 = document.getElementById('hole_diameter_139').checked = false;
                                            var center_hole_diameter_58_6 = document.getElementById('FilmSport').checked = false;
                                            var center_hole_diameter_60_1 = document.getElementById('Film_military').checked = false;
                                            var center_hole_diameter_98_1 = document.getElementById('Film_on_real_events').checked = false;
                                            var center_hole_diameter_66_1 = document.getElementById('center_hole_diameter_66_1').checked = false;
                                            var hide = document.getElementById('throwOff');
                                            hide.classList.add("hide");

                                            if(Molten === false && Repousse === false && Radius13 === false && Radius14 === false && Radius15 === false && Radius16 === false && Radius17 === false && mounting_holes_4 === false
                                                && mounting_holes_5 === false && hole_diameter_98 === false && hole_diameter_100 === false && hole_diameter_105 === false && hole_diameter_108 === false && hole_diameter_110 === false
                                                && hole_diameter_112 === false && hole_diameter_114_3 === false && hole_diameter_139 === false
                                                && center_hole_diameter_58_6 === false && center_hole_diameter_60_1 === false
                                                && center_hole_diameter_98_1 === false && center_hole_diameter_66_1 === false){
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
