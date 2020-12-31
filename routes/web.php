<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes([
    'reset' => false,
    'confirm' => true,
    'verify' => true,
]);
Route::get('/17285384FghEFgregister', '\App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/17285384FghEFglogin', '\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('get-login');
Route::get('sitemap.xml', '\App\Http\Controllers\MainController@sitemap')->name('sitemap');
Route::get('/genres', '\App\Http\Controllers\MainController@genres')->name('genres');
Route::get('/feedback', '\App\Http\Controllers\FeedbackController@index');
Route::post('/feedback/send', '\App\Http\Controllers\FeedbackController@send')->name('feedbackSend');
Route::get('/17285384FghEFglogout', '\App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');
Route::get('/verify/{token}', '\App\Http\Controllers\Auth\RegisterController@verify')->name('register.verify');



Route::middleware(['auth'])->group(function () {

    Route::group([
        'prefix' => '17285384FghEFgadmin',

    ], function (){
        Route::group(['middleware' => 'is_admin'], function(){
            Route::get('/orders/{order}', '\App\Http\Controllers\HomeController@show')->name('orders.show');
            Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('home');
        });
        Route::resource('categories','\App\Http\Controllers\CategoryController');
        Route::resource('products','\App\Http\Controllers\ProductController');
    });

    Route::group([
        'prefix' => 'person',
        'as' => 'person.',
    ], function () {
        Route::get('/orders', 'App\Http\Controllers\Person\OrderController@index')->name('orders.index');
        Route::get('/orders/{order}', 'App\Http\Controllers\Person\OrderController@show')->name('orders.show');
    });









});

Route::get('/', '\App\Http\Controllers\MainController@index')->name('index');
Route::get('/17285384FghEFgcategories', '\App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/search', '\App\Http\Controllers\MainController@search')->name('search');


Route::group(['prefix' => 'basket',], function (){
    Route::post('/add/{id}', '\App\Http\Controllers\BasketController@basketAdd')->name('basket-add');

    Route::group([
        'middleware' => 'basket_not_empty',
    ], function(){
        Route::get('/', '\App\Http\Controllers\BasketController@basket')->name('basket');
        Route::get('/place', '\App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
        Route::post('/place', '\App\Http\Controllers\BasketController@basketConfirm')->name('basket-confirm');
        Route::post('/remove/{id}', '\App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');
    });
});

Route::get('{category}', '\App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}', '\App\Http\Controllers\MainController@product')->name('product');





