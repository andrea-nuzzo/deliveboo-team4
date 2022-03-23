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

Auth::routes();

// *--- Area Privata ---*
Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('dishes', 'DishController');
    Route::get('/orders', 'OrderController@index')->name('orders');
});

// *--- Area Pubblica ---*

Route::get('/register', 'TypologyController@index')->name('register');

Route::get('{any?}', function () {
    return view('front');
})->where('any','.*');
