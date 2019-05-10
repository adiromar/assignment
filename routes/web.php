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

Route::get('/', function () {  // home page
    return view('layouts.index');
});
Route::get('/dash', function () { // dashboard
    return view('layouts.dashboard');
});
Route::get('/create', function () { // dashboard
    return view('layouts.create');
});
Route::get('/dash', 'AssignmentController@index');
Route::post('/insert', 'AssignmentController@store');
// socialite routes
Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
