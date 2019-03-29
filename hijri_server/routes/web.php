<?php

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

//////////////////   GET ROUTES  /////////////////////////////

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('soon', function () {
    return view('soon');
});
Route::get('price', function () {
    return view('price');
});
Route::get('curtains', 'HomeController@designPage');
Route::get('blinds', 'HomeController@designPage');
Route::get('wallpapers', 'HomeController@designPage');
Route::get('sofa-cloth', 'HomeController@designPage');

Route::get('silk', 'HomeController@clothPage');
Route::get('velvet', 'HomeController@clothPage');
Route::get('girard', 'HomeController@clothPage');
Route::get('organza', 'HomeController@clothPage');
Route::get('silky-velvet', 'HomeController@clothPage');
Route::get('plain-velvet', 'HomeController@clothPage');
Route::get('matt-velvet', 'HomeController@clothPage');
Route::get('net', 'HomeController@clothPage');
Route::get('jacquard-velvet', 'HomeController@clothPage');
Route::get('digital-print-velvet', 'HomeController@clothPage');
Route::get('jute', 'HomeController@clothPage');
Route::get('viscose-fabric', 'HomeController@clothPage');

Route::get('roller-blind', 'HomeController@blindPage');
Route::get('vertical-blind', 'HomeController@blindPage');
Route::get('mini-blind', 'HomeController@blindPage');
Route::get('wooden-blind', 'HomeController@blindPage');
Route::get('zebra-blind', 'HomeController@blindPage');
Route::get('shangrilla-blind', 'HomeController@blindPage');

Route::get('wooden-floor', 'HomeController@floorPage');
Route::get('vinyl-floor', 'HomeController@floorPage');
Route::get('glass-paper', 'HomeController@floorPage');


//////////////////   POST ROUTES  /////////////////////////////

Route::post('order-page', 'HomeController@orderPage');
Route::post('order', 'HomeController@order');
//Route::post('contact', 'HomeController@contact');


//////////////////   ADMIN ROUTES  /////////////////////////////

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
