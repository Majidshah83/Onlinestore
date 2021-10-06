<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () { 
  Route::group(['middleware' => ['role:user,admin']], function () { 
          Route::get('/home', 'HomeController@index')->name('home');
           Route::get('/userpage','User\UserController@index')->name('userpage');
  });
Route::group(['middleware' => ['role:admin,user']], function () { 

      Route::get('/home', 'HomeController@index')->name('home');
       Route::get('/dashboard','Admin\AdminController@index')->name('dashboard');

  });

});
 Route::get('/home', 'HomeController@index')->name('home');