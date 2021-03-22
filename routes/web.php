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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name("home.index");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/store/{id}', 'App\Http\Controllers\SeedController@show')->name("seed.show");

Route::get('/store', 'App\Http\Controllers\SeedController@listAll')->name("seed.list");

Route::get('/cart/shop', 'App\Http\Controllers\CartController@shop')->name("cart.shop");

Route::get('/cart/buy', 'App\Http\Controllers\CartController@buy')->name("cart.buy");

Route::get('/cart/removeAll', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");

Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
