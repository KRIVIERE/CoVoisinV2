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

Route::get('requests', 'RequestsController@index');
Route::post('requests', 'RequestsController@create');
Route::get('requests/{requests}', "RequestsController@show");
Route::put('requests/{requests}', "RequestsController@update");
Route::delete('requests/{requests}', "RequestsController@delete");

Route::get('offerResponses', 'OfferResponsesController@index');
Route::get('offerResponses/{offerResponse}', "OfferResponsesController@show");
Route::post('offerResponses', 'OfferResponsesController@create');
Route::put('offerResponses/{offerResponse}', "OfferResponsesController@update");
Route::delete('offerResponses/{offerResponse}', "OfferResponsesController@delete");