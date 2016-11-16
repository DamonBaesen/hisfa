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
    Route::get('dashboard', [
        'middleware' => 'auth',
        'uses' => 'DashboardController@index'
    ]);
    Route::get('home', [
        'middleware' => 'auth',
        'uses' => 'DashboardController@index'
    ]);

//account
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
    Route::get('account/add', [
        'middleware' => 'auth',
        'uses' => 'AccountController@addShow'
    ]);


//block
    Route::get('block', [
        'middleware' => 'auth',
        'uses' => 'BlockController@index'
    ]);
    Route::get('block/add', [
        'middleware' => 'auth',
        'uses' => 'BlockController@addShow'
    ]);
    Route::get('block/edit', [
        'middleware' => 'auth',
        'uses' => 'BlockController@edit'
    ]);
    Route::get('/block/remove', 'BlockController@remove');
    Route::post('/block/add', 'BlockController@add');

//quality
    Route::get('quality', [
        'middleware' => 'auth',
        'uses' => 'QualityController@index'
    ]);
    Route::get('quality/add', [
        'middleware' => 'auth',
        'uses' => 'QualityController@addshow'
    ]);
    Route::get('quality/edit', [
        'middleware' => 'auth',
        'uses' => 'QualityController@editShow'
    ]);
    Route::get('/quality/remove/{id}', 'QualityController@remove');
    Route::post('/quality/add', 'QualityController@add');
    Route::post('/quality/edit/{id}', 'QualityController@edit');

//rawmaterial
    Route::get('rawmaterial', [
        'middleware' => 'auth',
        'uses' => 'RawMaterialController@index'
    ]);
    Route::get('rawmaterial/add', [
        'middleware' => 'auth',
        'uses' => 'RawMaterialController@addShow'
    ]);
    Route::get('rawmaterial/edit', [
        'middleware' => 'auth',
        'uses' => 'RawMaterialController@editShow'
    ]);
    Route::get('rawmaterial/stock', [
        'middleware' => 'auth',
        'uses' => 'RawMaterialController@stockShow'
    ]);
    Route::get('/rawmaterial/remove/{id}', 'RawMaterialController@remove');
    Route::post('/rawmaterial/add', 'RawMaterialController@add');
    Route::post('/rawmaterial/edit/{id}', 'RawMaterialController@edit');
    Route::post('/rawmaterial/updatephoto/{id}', 'RawMaterialController@updatephoto');

//reset
    Route::get('/reset', 'ResetController@index');

//silo
    Route::get('silo', [
        'middleware' => 'auth',
        'uses' => 'SiloController@index'
    ]);
    Route::get('silo/add', [
        'middleware' => 'auth',
        'uses' => 'SiloController@addShow'
    ]);
    Route::get('silo/edit/{id}', [
        'middleware' => 'auth',
        'uses' => 'SiloController@editShow'
    ]);
    Route::get('/silo/remove/{id}', 'SiloController@remove');
    Route::post('/silo/add', 'SiloController@add');
    Route::post('/silo/edit/{id}', 'SiloController@edit');


//recyclesilo
    Route::get('recyclesilo', [
        'middleware' => 'auth',
        'uses' => 'RecycleSiloController@index'
    ]);
    Route::get('recyclesilo/add', [
        'middleware' => 'auth',
        'uses' => 'RecycleSiloController@addShow'
    ]);
    Route::get('recyclesilo/edit/{id}', [
        'middleware' => 'auth',
        'uses' => 'RecycleSiloController@editShow'
    ]);
    Route::get('/recyclesilo/remove/{id}', 'RecycleSiloController@remove');
    Route::post('/recyclesilo/add', 'RecycleSiloController@add');
    Route::post('/recyclesilo/edit/{id}', 'RecycleSiloController@edit');

Auth::routes();