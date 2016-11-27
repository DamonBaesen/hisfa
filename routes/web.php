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
Route::get('/dashboard', 'DashboardController@index')->middleware('auth','permission:viewdashboard');
Route::get('/dashboard/stock/{id}', 'DashboardController@ajax')->middleware('auth','permission:viewdashboard');
Route::get('/home', 'DashboardController@index')->middleware('auth','permission:viewdashboard');

//permissions
Route::get('/permissions', 'PermissionController@index')->middleware('auth', 'permission:manageusers');
Route::get('/permissions/edit/{id}', 'PermissionController@editShow')->middleware('auth', 'permission:manageusers');
Route::post('/permissions/edit/{id}', 'PermissionController@edit')->middleware('auth', 'permission:manageusers');

//account
Route::get('/account', 'AccountController@getData')->middleware('auth');
Route::get('/account/add', 'AccountController@addShow')->middleware('permission:manageusers');
Route::post('/account/add', 'AccountController@add')->middleware('permission:manageusers');
Route::get('/account/edit', 'AccountController@edit')->middleware('permission:manageusers');
Route::get('/account/remove', 'AccountController@remove');
Route::post('/account/changepassword', 'AccountController@changepassword');
Route::post('/account/updatephoto', 'AccountController@updatephoto');
Route::post('/account/changeuserinformation', 'AccountController@changeuserinformation');
Route::post('/account/send', 'EmailController@send');

//block
Route::get('/block', 'BlockController@index')->middleware('permission:viewblocks');
Route::get('/block/add', 'BlockController@addShow')->middleware('permission:manageblocks');
Route::get('/block/edit', 'BlockController@edit')->middleware('permission:manageblocks');
Route::get('/block/remove', 'BlockController@remove')->middleware('permission:manageblocks');
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
Route::get('quality/edit/{id}', [
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
Route::get('rawmaterial/edit/{id}', [
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
Route::get('/silo', 'SiloController@index')->middleware('auth','permission:viewprimesilos');
Route::get('/silo/add', 'SiloController@addShow')->middleware('auth','permission:manageprimesilos');
Route::get('/silo/remove/{id}', 'SiloController@remove')->middleware('auth','permission:manageprimesilos');
Route::get('/silo/edit/{id}', 'SiloController@editShow')->middleware('auth','permission:manageprimesilos');
Route::post('/silo/add', 'SiloController@add')->middleware('auth','permission:manageprimesilos');
Route::post('/silo/edit/{id}', 'SiloController@edit')->middleware('auth','permission:manageprimesilos');
//recyclesilo
Route::get('/recyclesilo', 'RecycleSiloController@index')->middleware('auth','permission:viewrecyclesilos');
Route::get('/recyclesilo/add', 'RecycleSiloController@addShow')->middleware('auth','permission:managerecyclesilos');
Route::get('/recyclesilo/remove/{id}', 'RecycleSiloController@remove')->middleware('auth','permission:managerecyclesilos');
Route::get('/recyclesilo/edit/{id}', 'RecycleSiloController@editShow')->middleware('auth','permission:managerecyclesilos');
Route::post('/recyclesilo/add', 'RecycleSiloController@add')->middleware('auth','permission:managerecyclesilos');
Route::post('/recyclesilo/edit/{id}', 'RecycleSiloController@edit')->middleware('auth','permission:managerecyclesilos');
Auth::routes();