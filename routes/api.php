<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/typologies", "Api\TypologyController@index");
Route::get("/typologies/{id}", "Api\TypologyController@show");
Route::get("/users", "Api\UserController@index");
Route::get("/users/{slug}", "Api\UserController@show");
Route::get("/dishes", "Api\DishController@index");
Route::get("/dishes/{id}", "Api\DishController@show");



Route::get('orders/generate', 'Api\OrderController@generate');
Route::post('orders/make/payment', 'Api\OrderController@makePayment');

