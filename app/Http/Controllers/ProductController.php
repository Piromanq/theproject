<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('auth.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('auth.products.form' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $newpath = $request->file('logo_image')->store('products');
        $path = $request->file('image')->store('products');
        $params = $request->all();
        $params['image'] = $path;
        $params['logo_image'] = $newpath;

        Product::create($params);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return view('auth.products.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('auth.products.form' , compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {

            $params = $request->all();
            unset($params['image']);
            if ($request->has('image')) {
                Storage::delete($product->image);
                $params['image'] = $request->file('image')->store('products');
            }
        if ($request->has('logo_image')) {
            Storage::delete($product->logo_image);
            $params['logo_image'] = $request->file('logo_image')->store('products');
        }

        foreach (['FilmAction', 'FilmWestern', 'FilmCrime',
                     'Action', 'Western', 'Crime', 'Detective', 'Drama', 'Historical_film', 'Comedy',
                     'Melodrama', 'Musical_film', 'Thriller', 'Fantastic_movie', 'Horror', 'Catastrophe_movie', 'Russian_serials',
                     'romantic', 'Fantasy','Zombie_Werewolves_Vampires', 'Sport', 'military', 'on_real_events', 'Evil_Spirits_And_Witches',
                     'Netflix', 'FilmDetective', 'FilmDrama', 'FilmHistorical_film', 'FilmComedy', 'FilmMelodrama', 'FilmMusical_film', 'FilmTragedy',
                     'FilmTragicomedy', 'FilmThriller', 'FilmFantastic_movie', 'FilmHorror', 'FilmCatastrophe_movie', 'Film_romantic',
                     'FilmFantasy', 'FilmZombie_Werewolves_Vampires', 'FilmSport', 'Film_military', 'Film_on_real_events',] as $fieldName)
            {
             if (!isset($params[$fieldName])){
                 $params[$fieldName] = 0;
             }
            }

        $product->update($params);
        return redirect()->route('products.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
