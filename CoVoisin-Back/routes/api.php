<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

Route::get('users', 'UserController@index');
Route::post('users', 'UserController@create');
Route::get('users/{user}', "UserController@show");
Route::put('users/{user}', "UserController@update");
Route::delete('users/{user}', "UserController@delete");

Route::get('offers', 'OffersController@index');
Route::get('offers/{offer}', "OffersController@show");
Route::post('offers', 'OffersController@create');
Route::put('offers/{offer}', "OffersController@update");
Route::delete('offers/{offer}', "OffersController@delete");