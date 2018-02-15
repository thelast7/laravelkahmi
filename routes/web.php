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

Route::get('/user/activation/{token}','Auth\RegisterController@userActivation');

Route::get('/about', 'HomeController@about');

Route::get('/home', 'HomeController@index');

Route::get('/welcome', 'HomeController@welcome');

Route::get('/movie', 'HomeController@movie');

Route::get('/berita', 'HomeController@berita');

Route::get('/forum', 'HomeController@forum');

Route::get('/lupapassword', 'HomeController@lupapassword');

Route::get('/contact', 'HomeController@contact');

Route::get('/caramendaftar', 'HomeController@caramendaftar');

Route::get('/termsandcondition', 'HomeController@termsandcondition');