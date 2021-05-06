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

        foreach (['Molten', 'Repousse', 'Radius13',
                     'R13', 'R14', 'R15', 'R16', 'R17', 'R18', 'R19',
                     'R20', 'Filter175X65', 'Filter175X70', 'Filter185X60', 'Filter185X65', 'Filter195X60', 'Filter195X65',
                     'Filter205X55', 'Filter205X60','Filter215X55', 'Filter215X60', 'Filter215X65', 'Filter225X55', 'Filter225X60', 'Filter235X55',
                     'Filter235X60', 'summer', 'winter', 'Radius14', 'Radius15', 'Radius16', 'Radius17', 'mounting_holes_4', 'mounting_holes_5', 'hole_diameter_98',
                     'hole_diameter_100', 'hole_diameter_105', 'hole_diameter_108', 'hole_diameter_110', 'hole_diameter_112', 'hole_diameter_114_3',
                     'hole_diameter_139', 'center_hole_diameter_58_6', 'center_hole_diameter_60_1', 'center_hole_diameter_98_1', 'center_hole_diameter_66_1',] as $fieldName)
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
