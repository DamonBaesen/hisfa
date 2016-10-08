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


Route::get('/login', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    return view('welcome');
});

Route::get('/history', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/account', 'AccountController@getData', function () {
    return view('account');
});
Route::post('/account/changepassword', 'AccountController@changepassword');
Route::post('/account/changeuserinformation', 'AccountController@changeuserinformation');

Route::get('/account/add', function () {
    return view('welcome');
});

Route::get('/rawmaterial', function () {
    return view('welcome');
});

Route::get('/rawmaterial/add', function () {
    return view('welcome');
});

Route::get('/blocks', function () {
    return view('welcome');
});

Route::get('/blocks/add', function () {
    return view('welcome');
});

Route::get('/silo', function () {
    return view('welcome');
});

Route::get('/silo/add', function () {
    return view('welcome');
});
