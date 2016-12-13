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
Route::get('/dashboard', 'DashboardController@index')
    ->middleware('auth','permission:viewdashboard');
Route::get('/dashboard/stock/{id}', 'DashboardController@ajax')
    ->middleware('auth','permission:viewdashboard');
Route::get('/dashboard/events', 'DashboardController@events')
    ->middleware('auth','permission:viewdashboard');
Route::get('/home', 'DashboardController@index')
    ->middleware('auth','permission:viewdashboard');

//permissions
Route::get('/permissions', 'PermissionController@index')
    ->middleware('auth', 'permission:manageusers');
Route::get('/permissions/edit/{id}', 'PermissionController@editShow')
    ->middleware('auth', 'permission:manageusers');
Route::post('/permissions/edit/{id}', 'PermissionController@edit')
    ->middleware('auth', 'permission:manageusers');

//account
Route::get('/account', 'AccountController@getData')
    ->middleware('auth');
Route::get('/account/add', 'AccountController@addShow')
    ->middleware('auth','permission:manageusers');
Route::post('/account/add', 'AccountController@add')
    ->middleware('permission:manageusers');
Route::get('/account/edit', 'AccountController@edit')
    ->middleware('auth','permission:manageusers');
Route::get('/account/remove', 'AccountController@remove')
    ->middleware('auth');
Route::post('/account/changepassword', 'AccountController@changepassword')
    ->middleware('auth');
Route::post('/account/updatephoto', 'AccountController@updatephoto')
    ->middleware('auth');
Route::post('/account/changeuserinformation', 'AccountController@changeuserinformation')
    ->middleware('auth');
Route::post('/account/send', 'EmailController@send')
    ->middleware('auth');

//block
Route::get('/block', 'BlockController@index')
    ->middleware('auth','permission:viewblocks');
Route::get('/block/add/{id}', 'BlockController@addShow')
    ->middleware('auth','permission:manageblocks');
Route::get('/block/edit/{id}', 'BlockController@editShow')
    ->middleware('auth','permission:manageblocks');
Route::get('/block/remove/{id}', 'BlockController@remove')
    ->middleware('auth','permission:manageblocks');
Route::post('/block/edit/{id}', 'BlockController@edit')
    ->middleware('auth');
Route::post('/block/add/{id}', 'BlockController@add')
    ->middleware('auth');

//quality
Route::get('quality', 'QualityController@index')
    ->middleware('auth');
Route::get('quality/add', 'QualityController@addshow')
    ->middleware('auth');
Route::get('quality/edit/{id}','QualityController@editShow')
    ->middleware('auth');
Route::get('/quality/remove/{id}', 'QualityController@remove')
    ->middleware('auth');
Route::post('/quality/add', 'QualityController@add')
    ->middleware('auth');
Route::post('/quality/edit/{id}', 'QualityController@edit')
    ->middleware('auth');

//rawmaterial
Route::get('rawmaterial','RawMaterialController@index')
    ->middleware('auth');
Route::get('rawmaterial/add','RawMaterialController@addShow')
    ->middleware('auth');
Route::get('rawmaterial/edit/{id}','RawMaterialController@editShow')
    ->middleware('auth');
Route::get('rawmaterial/stock','RawMaterialController@stockShow')
    ->middleware('auth');
Route::get('/rawmaterial/remove/{id}','RawMaterialController@remove')
    ->middleware('auth');
Route::post('/rawmaterial/add','RawMaterialController@add')
    ->middleware('auth');
Route::post('/rawmaterial/edit/{id}','RawMaterialController@edit')
    ->middleware('auth');
Route::post('/rawmaterial/updatephoto/{id}', 'RawMaterialController@updatephoto')
    ->middleware('auth');
                 
//reset
Route::get('/reset', 'ResetController@index');
                 
//silo
Route::get('/silo', 'SiloController@index')
    ->middleware('auth','permission:viewprimesilos');
Route::get('/silo/add', 'SiloController@addShow')
    ->middleware('auth','permission:manageprimesilos');
Route::get('/silo/remove/{id}', 'SiloController@remove')
    ->middleware('auth','permission:manageprimesilos');
Route::get('/silo/edit/{id}', 'SiloController@editShow')
    ->middleware('auth','permission:manageprimesilos');
Route::post('/silo/add', 'SiloController@add')
    ->middleware('auth','permission:manageprimesilos');
Route::post('/silo/edit/{id}', 'SiloController@edit')
    ->middleware('auth','permission:manageprimesilos');
                 
//recyclesilo
Route::get('/recyclesilo', 'RecycleSiloController@index')
    ->middleware('auth','permission:viewrecyclesilos');
Route::get('/recyclesilo/add','RecycleSiloController@addShow')
    ->middleware('auth','permission:managerecyclesilos');
Route::get('/recyclesilo/remove/{id}','RecycleSiloController@remove')
    ->middleware('auth','permission:managerecyclesilos');
Route::get('/recyclesilo/edit/{id}','RecycleSiloController@editShow')
    ->middleware('auth','permission:managerecyclesilos');
Route::post('/recyclesilo/add','RecycleSiloController@add')
    ->middleware('auth','permission:managerecyclesilos');
Route::post('/recyclesilo/edit/{id}','RecycleSiloController@edit')
    ->middleware('auth','permission:managerecyclesilos');
                 
Auth::routes();
                 
                 
                 