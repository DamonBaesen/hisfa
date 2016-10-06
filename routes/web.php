<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index');
Route::get('/login', 'LoginController@__construct');
Route::get('/logout', 'LogoutController@index');
Route::get('/history', 'HistoryController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/account', 'AccountController@index');
Route::get('/account/add', 'AccountController@add');
Route::get('/account/edit', 'AccountController@edit');
Route::get('/account/remove', 'AccountController@remove');
Route::get('/block', 'BlockController@index');
Route::get('/block/add', 'BlockController@add');
Route::get('/block/edit', 'BlockController@edit');
Route::get('/block/remove', 'BlockController@remove');
Route::get('/rawmaterial', 'RawMaterialController@index');
Route::get('/rawmaterial/add', 'RawMaterialController@add');
Route::get('/rawmaterial/edit', 'RawMaterialController@edit');
Route::get('/rawmaterial/remove', 'RawMaterialController@remove');
Route::get('/reset', 'ResetController@index');
Route::get('/silo', 'SiloController@index');
Route::get('/silo/add', 'SiloController@add');
Route::get('/silo/remove', 'SiloController@remove');
Route::get('/silo/edit', 'SiloController@edit');
Route::get('/waste', 'WasteController@index');
Route::get('/waste/add', 'WasteController@add');
Route::get('/home', 'HomeController@index');


Auth::routes();


