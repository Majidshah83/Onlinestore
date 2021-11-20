<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () { 
  Route::group(['middleware' => ['role:user,admin']], function () { 
          Route::get('/home', 'HomeController@index')->name('home');
           Route::get('/userdashboard','User\UserController@dashboard')->name('userdashboard');
  });
Route::group(['middleware' => ['role:admin']], function () { 

      Route::get('/home', 'HomeController@index')->name('home');
       Route::get('/dashboard','Admin\AdminController@dashboard')->name('dashboard');

  });

});
 Route::get('/home', 'HomeController@index')->name('home');

 Route::get('index','FrontendController\MainController@index');
 Route::get('shop','FrontendController\ShopController@index')->name('shop');
 Route::get('product_list/','FrontendController\ProductController@index')->name('product_list');
 Route::get('productdeatil/{id}','FrontendController\ProductController@productDteail')->name('productdeatil');
 Route::get('cart','FrontendController\CartController@index')->name('cart');
 Route::get('checkout','FrontendController\CheckoutController@index')->name('checkout');
 Route::get('categoriedeatil/{id}','FrontendController\CategoryController@categories');

//categries
Route::get('womenTshirt','FrontendController\CategoryController@womenTshirt')->name('womenTshirt');
Route::get('/addTocart/{id}','FrontendController\ProductController@getAddToCart')->name('addTocart');
Route::post('place_Order','FrontendController\CheckoutController@placeOrder')->name('place_Order');
Route::post('update-cart', 'FrontendController\ProductController@update')->name('update.cart');
Route::delete('remove-from-cart','FrontendController\ProductController@remove')->name('remove.from.cart');