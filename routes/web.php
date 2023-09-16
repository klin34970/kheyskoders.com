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

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('index');
Route::get('/sn', 'HomeController@socialsNetworks')->name('socialsnetworks');
Route::get('/mn', 'HomeController@musicNetworks')->name('musicnetworks');

Route::get('auth/instagram', 'Auth\InstagramController@redirect')->name('auth.instagram.redirect');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@home')->name('home');
});
