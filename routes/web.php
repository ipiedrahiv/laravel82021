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

Route::get('/admin', [App\Http\Controllers\AdminHomeController::class, 'index'])->name("admin.home.index");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/store/{id}', 'App\Http\Controllers\SeedController@show')->name("seed.show");

Route::get('/store', 'App\Http\Controllers\SeedController@listAll')->name("seed.list");
