<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFilterRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
public function index(ProductsFilterRequest $request)
{
    $productsQuery = Product::query();



    $products = $productsQuery->latest()->paginate(10);
    return view('index', compact('products'));

}

public function genres(ProductsFilterRequest $request){
    $productsQ = Product::query();


  foreach  ([

                      'Action' => 'Боевик',
                      'Western' => 'Вестерн',
                      'Crime' => 'Криминал',
                      'Detective' => 'Детектив',
                      'Drama' => 'Драма',
                      'Historical_film' => 'Исторический сериал',
                      'Comedy' => 'Комедия',
                      'Melodrama' => 'Мелодрама',
               'Musical_film' => 'Музыкальный',
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
                  ] as $field => $title){

        if ($request->has($field)) {
         $result =  $productsQ->where($field, 1);

         if ($result->count() > 0){
             $request->session()->flash('success', 'Вы произвели поиск по жанрам.');
         }
        }
    }
    $products = $productsQ->paginate(10)->withPath("?" .$request->getQueryString());
    return view('genres', compact('products'));
}


    public function sitemap() {
                $posts = Product::query()->get();

                return response()->view('sitemap', compact('posts'))
                    ->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category(ProductsFilterRequest $request, $code)
    {
        $category = Category::where('code', $code)->first();
        $productsQuery = Product::where('category_id', $category->id);
        $products = $productsQuery->latest()->paginate(10);
        return view('category', compact('category', 'products'));
    }

    public function product($category, $productCode)
    {
        $product = Product::byCode($productCode)->first();
        return view('product', compact('product'));
    }

    public function search(ProductsFilterRequest $request){
        $search = $request->search;
        $products = Product::query()->where('name', 'LIKE', "%{$search}%")->orderBy('name')->paginate(4);

        return view('index', compact('products'));
    }

}
