<?php

// Isabel Piedrahita
// Santiago Santacruz

// Isabel Piedrahita
// Santiago Santacruz

// Isabel Piedrahita
// Santiago Santacruz

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
// HOME
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/lang/{locale}', 'App\Http\Controllers\LangController@setting')->name('lang.setting');

// ADMIN
Route::get('/admin', 'App\Http\Controllers\AdminHomeController@index')->name('admin.home.index');
Route::get('/admin/seed/show/{id}', 'App\Http\Controllers\AdminHomeController@show')->name('admin.show');
Route::get('/admin/seed/create', 'App\Http\Controllers\AdminHomeController@create')->name('admin.create');
Route::post('/admin/seed/save', 'App\Http\Controllers\AdminHomeController@save')->name('admin.save');
Route::get('/admin/seed/list', 'App\Http\Controllers\AdminHomeController@listAll')->name('admin.list');
Route::get('/admin/seed/show/{id}/delete', 'App\Http\Controllers\AdminHomeController@delete')->name('admin.delete');
Route::get('/admin/seed/download', 'App\Http\Controllers\AdminHomeController@download')->name('admin.download');
Route::get('/admin/order', 'App\Http\Controllers\AdminHomeController@order')->name('admin.order');

Auth::routes();

// FINAL USER
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/store/{id}', 'App\Http\Controllers\SeedController@show')->name('seed.show');
Route::get('/store', 'App\Http\Controllers\SeedController@listAll')->name('seed.list');
Route::post('/store/query', 'App\Http\Controllers\SeedController@search')->name('seed.search');

// CART
Route::get('/cart/shop', 'App\Http\Controllers\CartController@shop')->name('cart.shop');
Route::get('/cart/buy', 'App\Http\Controllers\CartController@buy')->name('cart.buy');
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name('cart.removeAll');
Route::get('/cart/remove/{id}', 'App\Http\Controllers\CartController@remove')->name('cart.remove');
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');

//ORDER
Route::get('/order', 'App\Http\Controllers\OrderController@listAll')->name('order.index');
Route::get('/order/{id}', 'App\Http\Controllers\OrderController@show')->name('order.show');
Route::get('/order/download/{id}', 'App\Http\Controllers\OrderController@download')->name('order.download');

// REVIEWS
Route::get('/store/comment/create', 'App\Http\Controllers\ReviewController@create')->name('review.create');
Route::post('/store/comment/save', 'App\Http\Controllers\ReviewController@save')->name('review.save');

// ECOPRODUCTS
Route::get('/ecoproducts', 'App\Http\Controllers\EcoProductsController@apiWithoutKey')->name('ecoproducts.list');
