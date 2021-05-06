


<div class="magicseason">

    <div class="kino-title">
        <a href="{{route('product', [$product->category->code, $product->code])}}" class="a_magicseason">{{$product->name}}</a>
    </div>
    <div class="kino-inner">
        <a href="{{route('product', [$product->category->code, $product->code])}}">
        <button class="btn-characteristics">Все характеристики</button>
        </a>
        <a href="{{route('product', [$product->category->code, $product->code])}}"><img src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}" alt="iPhone X 64GB"></a>
        <div class="kino-text">
            <ul class="specific_lines">
                @isset($product->StageDirector)
                <li><h4 class="color_new">Модель</h4>
                    {{$product->StageDirector}}</li>
                @endisset
                @if(isset($product->voice_acting))
                    @if($product->category_id == 2)
                            <li><h4 class="color_new"> Ширина обода, дюйм</h4><span class="">{{$product->voice_acting}}</span></li>
                        @endif
                    @else
                <li><h4 class="color_new">Ширина профиля, мм</h4><span class="">{{$product->voice_acting}}</span></li>
                @endif
                @if(isset($product->episode_release_day))
                <li><h4 class="color_new">Высота профиля, %</h4><span class="">{{$product->episode_release_day}}</span>
                @endif
                <li><h4 class="color_new">Диаметр, дюйм</h4>{{$product->number_of_episodes}}</li>
                    @if($product->category_id == 2)
                        <li><h4 class="color_new">Кол-во крепежных отверстий</h4><span>{{$product->genres}}</span></li>
                        @else
                        <li><h4 class="color_new">Сезонность</h4><span>{{$product->genres}}</span></li>
                        @endif
                @auth
                <form action="{{route('basket-add', $product)}}" method="POST">
                    @csrf

                    <button type="submit" class="btn-favorites" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>Добавить в избранное</button>

                </form>
                    @endauth
            </ul>

        </div>
    </div>
</div>
