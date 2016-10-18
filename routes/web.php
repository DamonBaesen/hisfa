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

Route::get('/', function(){
    return redirect()->route('login');
});

Route::get('/login', 'LoginController@__construct');
Route::get('/logout', 'LogoutController@index');
Route::get('/password/reset', 'ResetController@index');
Route::get('/history', 'HistoryController@index');
Route::get('/dashboard', 'DashboardController@index');

Route::get('/account/add', 'AccountController@addShow');
Route::post('/account/add', 'AccountController@add');
Route::get('/account/edit', 'AccountController@edit');

Route::get('/account/remove', 'AccountController@remove');
Route::get('/block', 'BlockController@index');
Route::get('/block/add', 'BlockController@addShow');
Route::get('/block/edit', 'BlockController@edit');
Route::get('/block/remove', 'BlockController@remove');

Route::get('/quality', 'QualityController@index');
Route::get('/quality/add', 'QualityController@addShow');

Route::get('/rawmaterial', 'RawMaterialController@index');
Route::get('/rawmaterial/add', 'RawMaterialController@addShow');
Route::get('/rawmaterial/edit/{id}', 'RawMaterialController@editShow');
Route::get('/rawmaterial/remove/{id}', 'RawMaterialController@remove');

Route::get('/reset', 'ResetController@index');

Route::get('/silo', 'SiloController@index');
Route::get('/silo/add', 'SiloController@addShow');
Route::get('/silo/remove/{id}', 'SiloController@remove');
Route::get('/silo/edit/{id}', 'SiloController@editShow');

Route::get('/recyclesilo', 'RecycleSiloController@index');
Route::get('/recyclesilo/add', 'RecycleSiloController@addShow');
Route::get('/recyclesilo/remove/{id}', 'RecycleSiloController@remove');
Route::get('/recyclesilo/edit/{id}', 'RecycleSiloController@editShow');
Route::get('/home', 'DashboardController@index');

Route::post('/account/changepassword', 'AccountController@changepassword');
Route::post('/account/updatephoto', 'AccountController@updatephoto');
Route::post('/account/changeuserinformation', 'AccountController@changeuserinformation');
Route::post('/account/send', 'EmailController@send');

Route::post('/silo/add', 'SiloController@add');
Route::post('/silo/edit/{id}', 'SiloController@edit');
Route::post('/recyclesilo/add', 'RecycleSiloController@add');
Route::post('/recyclesilo/edit/{id}', 'RecycleSiloController@edit');

Route::post('/rawmaterial/add', 'RawMaterialController@add');
Route::post('/rawmaterial/edit/{id}', 'RawMaterialController@edit');
Route::post('/block/add', 'BlockController@add');

Route::get('account', [
    'middleware' => 'auth',
    'uses' => 'AccountController@getData'
]);


Auth::routes();