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

//login
Route::get('/', function () {
    return view('login');
});
Route::get('/', function(){
    return redirect()->route('login');
});
Route::get('/login', 'LoginController@__construct');

//logout
Route::get('/logout', 'LogoutController@index');

//password
Route::get('/password/reset', 'ResetController@index');

//history
Route::get('/history', 'HistoryController@index');

//dashboard + home
Route::get('/dashboard', 'DashboardController@index');
Route::get('/home', 'DashboardController@index');

//account
Route::get('/account/add', 'AccountController@addShow');
Route::post('/account/add', 'AccountController@add');
Route::get('/account/edit', 'AccountController@edit');
Route::get('/account/remove', 'AccountController@remove');
Route::post('/account/changepassword', 'AccountController@changepassword');
Route::post('/account/updatephoto', 'AccountController@updatephoto');
Route::post('/account/changeuserinformation', 'AccountController@changeuserinformation');
Route::post('/account/send', 'EmailController@send');
Route::get('account', [
    'middleware' => 'auth',
    'uses' => 'AccountController@getData'
]);


//block
Route::get('/block', 'BlockController@index');
Route::get('/block/add', 'BlockController@addShow');
Route::get('/block/edit', 'BlockController@edit');
Route::get('/block/remove', 'BlockController@remove');
Route::post('/block/add', 'BlockController@add');


//quality
Route::get('/quality', 'QualityController@index');
Route::get('/quality/add', 'QualityController@addShow');
Route::get('/quality/remove/{id}', 'QualityController@remove');
Route::get('/quality/edit/{id}', 'QualityController@editShow');
Route::post('/quality/add', 'QualityController@add');
Route::post('/quality/edit/{id}', 'QualityController@edit');

//rawmaterial
Route::get('/rawmaterial', 'RawMaterialController@index');
Route::get('/rawmaterial/add', 'RawMaterialController@addShow');
Route::get('/rawmaterial/edit/{id}', 'RawMaterialController@editShow');
Route::get('/rawmaterial/remove/{id}', 'RawMaterialController@remove');
Route::get('/rawmaterial/stock', 'RawMaterialController@stockShow');
Route::post('/rawmaterial/add', 'RawMaterialController@add');
Route::post('/rawmaterial/edit/{id}', 'RawMaterialController@edit');

//reset
Route::get('/reset', 'ResetController@index');

//silo
Route::get('/silo', 'SiloController@index');
Route::get('/silo/add', 'SiloController@addShow');
Route::get('/silo/remove/{id}', 'SiloController@remove');
Route::get('/silo/edit/{id}', 'SiloController@editShow');
Route::post('/silo/add', 'SiloController@add');
Route::post('/silo/edit/{id}', 'SiloController@edit');


//recyclesilo
Route::get('/recyclesilo', 'RecycleSiloController@index');
Route::get('/recyclesilo/add', 'RecycleSiloController@addShow');
Route::get('/recyclesilo/remove/{id}', 'RecycleSiloController@remove');
Route::get('/recyclesilo/edit/{id}', 'RecycleSiloController@editShow');
Route::post('/recyclesilo/add', 'RecycleSiloController@add');
Route::post('/recyclesilo/edit/{id}', 'RecycleSiloController@edit');

Auth::routes();