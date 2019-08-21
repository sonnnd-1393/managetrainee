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
    return view('home.profile');
})->middleware('auth');;

Route::get('/login', function () {
    return view('home.login');
});

Route::get('/tracking', function () {
    return view('home.tracking');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/language', 'LanguageController@index');

Route::get('/test', 'BatchController@index');
