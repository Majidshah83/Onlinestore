<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\ProductController;
use App\Http\Controllers\FrontendController\StripeController;

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



// Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () { 

  // Route::group(['middleware' => ['role:user,admin']], function () { 
          Route::get('/home', 'HomeController@index')->name('home');
           Route::get('/userdashboard','User\UserController@index')->name('userdashboard');
           Route::get('checkout','FrontendController\CheckoutController@index')->name('checkout');
  // });
// Route::group(['middleware' => ['role:admin']], function () { 

      Route::get('/home', 'HomeController@index')->name('home');
       Route::get('/dashboard','Admin\AdminController@dashboard')->name('dashboard');
       Route::get('/','Admin\AdminController@dashboard')->name('dashboard');

  // });

});
 Route::get('/home', 'HomeController@index')->name('home');

 Route::get('index','FrontendController\MainController@index');
 Route::get('shop','FrontendController\ShopController@index')->name('shop');
 Route::get('product_list/','FrontendController\ProductController@index')->name('product_list');
 Route::get('productdeatil/{id}','FrontendController\ProductController@productDteail')->name('productdeatil');
 Route::get('cart','FrontendController\CartController@index')->name('cart');
 
 Route::get('categoriedeatil/{id}','FrontendController\CategoryController@categories');

//categries
Route::get('womenTshirt','FrontendController\CategoryController@womenTshirt')->name('womenTshirt');
Route::get('/addTocart/{id}','FrontendController\ProductController@getAddToCart')->name('addTocart');
Route::post('place_Order','FrontendController\CheckoutController@placeOrder')->name('place_Order');
Route::post('update-cart', 'FrontendController\ProductController@update')->name('update.cart');
Route::delete('remove-from-cart','FrontendController\ProductController@remove')->name('remove.from.cart');
Route::get('payment-success','FrontendController\paymentController@paymentSuccess')->name('payment-success');
Route::get('paymentMethod','FrontendController\paymentController@paymentMethod')->name('paymentMethod');

Route::get('stripe','FrontendController\StripeController@handleGet');
Route::post('stripe-payment','FrontendController\StripeController@handlePost')->name('stripe.payment');