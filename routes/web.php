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

Route::get('/', 'BlogsController@index')->name('blogs.index');

Route::get('/coba', function() {
	return view('auth.coba');
});

Auth::routes();

// Route yang menangani Pendaftaran
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/caramendaftar', 'HomeController@caramendaftar');
Route::get('/termsandcondition', 'HomeController@termsandcondition');

Route::get('/user/activation/{token}','Auth\RegisterController@userActivation');

//Route yang menangani tatacara mendaftar
Route::get('/daftar', 'HomeController@index');

// Route Yang menangani smua tentang  Abouts Tentang
Route::get('/about', 'AboutsController@index');

// Rout yang menangani sumua Videos
Route::get('/movie', 'VideosController@index');

// Route yang menangani smua Berita
Route::get('/berita', 'BeritaController@index');

// Route yang menangani semua isi berita(sementara)
// Route::get('/isiberita/{slug}', 'BeritaController@isiberita');
Route::get('/isiberita/{slug}', [
	'uses' => 'BeritaController@isiberita',
	'as'   => 'isiberita'
]);
// Route yang menangani contact
Route::get('/contact', 'ContactsController@index');
Route::post('/contact', 'ContactsController@sendMail');

// Route yang menangani Forum
Route::get('/forum', 'ForumsController@index');

//Route yang menangani tatacara mendaftar
Route::get('/daftar', 'HomeController@index');

//Route yang menangani profil
Route::get('/profil', 'ProfilController@index');
Route::get('/editprofil', 'EditProfilController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function() {
	Route::get('/dashboard', 'Backend\HomeController@index')->name('dashboard.home');
	Route::resource('/categories', 'Backend\CategoriesController');
	Route::resource('/posts', 'Backend\PostsController');
});
