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



    $products = $productsQuery->paginate(10);
    return view('index', compact('products'));

}

public function genres(ProductsFilterRequest $request){
    $productsQ = Product::query();


  foreach  ([
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
               'Molten' => 'Литой',
               'Repousse' => 'Штампованный',
               'Radius13' => 'Радиус 13',
               'Radius14' => 'Радиус 14',
               'Radius15' => 'Радиус 15',
               'Radius16' => 'Радиус 16',
               'Radius17' => 'Радиус 17',
               'mounting_holes_4' => '4',
                'mounting_holes_5' => '5',
               'hole_diameter_98' => '98',
               'hole_diameter_100' => '100',
                'hole_diameter_105' => '105',
               'hole_diameter_108' => '108',
                'hole_diameter_110' => '110',
               'hole_diameter_112' => '112',
                'hole_diameter_114_3' => '114.3',
               'hole_diameter_139' => '139',
                'center_hole_diameter_58_6' => '58.6',
               'center_hole_diameter_60_1' => '60.1',
                'center_hole_diameter_98_1' => '98.1',
                'center_hole_diameter_66_1' => '66.1',




                  ] as $field => $title){

        if ($request->has($field)) {
         $result =  $productsQ->where($field, 1);

         if ($result->count() > 0){
             $request->session()->flash('success', 'Вы произвели поиск по размеру.');
         } else{
             $request->session()->flash('success', 'По данному запросу ничего нету :(');
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
        $products = $productsQuery->paginate(10);
        return view('category', compact('category', 'products'));
    }

    public function product($category, $productCode)
    {
        $product = Product::byCode($productCode)->first();
        return view('product', compact('product'));
    }

    public function search(ProductsFilterRequest $request){
        $search = $request->search;
        $products = Product::query()->where('name', 'LIKE', "%{$search}%")->orderBy('name')->paginate(10);

        return view('index', compact('products'));
    }

}
