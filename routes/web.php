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
    return view('login');
});

Route::get('/', 'DashboardController@index');
Route::get('/login', 'LoginController@__construct');
Route::get('/logout', 'LogoutController@index');
Route::get('/password/reset', 'ResetController@index');
Route::get('/history', 'HistoryController@index');
Route::get('/dashboard', 'DashboardController@index');
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
Route::get('/silo/add', 'SiloController@addShow');
Route::get('/silo/remove/{id}', 'SiloController@remove');
Route::get('/silo/edit/{id}', 'SiloController@editShow');
Route::get('/waste', 'WasteController@index');
Route::get('/waste/add', 'WasteController@add');
Route::get('/home', 'DashboardController@index');

Route::post('/account/changepassword', 'AccountController@changepassword');
Route::post('/account/updatephoto', 'AccountController@updatephoto');
Route::post('/account/changeuserinformation', 'AccountController@changeuserinformation');
Route::post('/silo/add', 'SiloController@add');
Route::post('/silo/edit/{id}', 'SiloController@edit');

Route::get('account', [
    'middleware' => 'auth',
    'uses' => 'AccountController@getData'
]);


Auth::routes();