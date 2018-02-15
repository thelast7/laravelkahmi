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

// Route Yang menangani smua tentang  Abouts Tentang
Route::get('/about', 'AboutsController@index');

// Rout yang menangani sumua Videos
Route::get('/movie', 'VideosController@index');

// Route yang menangani smua Berita
Route::get('/berita', 'BeritaController@index');

// Route yang menangani contact
Route::get('/contact', 'ContactsController@index');

Route::get('/home', 'HomeController@index');

Route::get('/welcome', 'HomeController@welcome');

Route::get('/forum', 'HomeController@forum');

Route::get('/lupapassword', 'HomeController@lupapassword');


Route::get('/caramendaftar', 'HomeController@caramendaftar');

Route::get('/termsandcondition', 'HomeController@termsandcondition');
