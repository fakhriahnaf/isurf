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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'YourController@logout');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/isurf', function () {
    return view('isurf');
});

Route::get('/setting', function () {
    return view('setting');
});


Route::get('/black', function () {
    return view('black');
});