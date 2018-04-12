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

Route::get('users', 'UserController@index')->middleware('cors');
Route::post('users', 'UserController@create')->middleware('cors');
Route::get('users/{user}', "UserController@show")->middleware('cors');
Route::put('users/{user}', "UserController@update")->middleware('cors');
Route::delete('users/{user}', "UserController@delete")->middleware('cors');

Route::get('offers', 'OffersController@index')->middleware('cors');
Route::get('offers/{offer}', "OffersController@show")->middleware('cors');
Route::post('offers', 'OffersController@create')->middleware('cors');
Route::put('offers/{offer}', "OffersController@update")->middleware('cors');
Route::delete('offers/{offer}', "OffersController@delete")->middleware('cors');

Route::get('requests', 'RequestsController@index')->middleware('cors');
Route::post('requests', 'RequestsController@create')->middleware('cors');
Route::get('requests/{requests}', "RequestsController@show")->middleware('cors');
Route::put('requests/{requests}', "RequestsController@update")->middleware('cors');
Route::delete('requests/{requests}', "RequestsController@delete")->middleware('cors');

Route::get('offerResponses', 'OfferResponsesController@index')->middleware('cors');
Route::get('offerResponses/{offerResponse}', "OfferResponsesController@show")->middleware('cors');
Route::post('offerResponses', 'OfferResponsesController@create')->middleware('cors');
Route::put('offerResponses/{offerResponse}', "OfferResponsesController@update")->middleware('cors');
Route::delete('offerResponses/{offerResponse}', "OfferResponsesController@delete")->middleware('cors');

Route::get('requestResponses', 'RequestResponsesController@index')->middleware('cors');
Route::get('requestResponses/{requestResponses}', "RequestResponsesController@show")->middleware('cors');
Route::post('requestResponses', 'RequestResponsesController@create')->middleware('cors');
Route::put('requestResponses/{requestResponses}', "RequestResponsesController@update")->middleware('cors');
Route::delete('requestResponses/{requestResponses}', "RequestResponsesController@delete")->middleware('cors');
