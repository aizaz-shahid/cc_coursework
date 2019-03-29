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

Route::get('cloth-type', 'ApiController@clothPage');
Route::get('design', 'ApiController@designPage');
Route::get('blinds', 'ApiController@blindPage');
Route::get('floor', 'ApiController@floorPage');
Route::post('new-order', 'ApiController@order');