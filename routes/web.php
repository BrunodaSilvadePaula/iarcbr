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

/* Route::get('/', function () { */
/*     return view('welcome'); */
/* }); */

Route::resource('/', 'FrontController');

Auth::routes();

Route::post('/contato', 'ContactController@store')->name('contato.store');
Route::get('/noticias', 'NoticeController@showAll')->name('noticia.showAll');
Route::get('/noticia/{id}', 'NoticeController@showNotice')->name('noticia.showNoticia');

Route::group(['middleware' => 'auth'], function () {
  Route::get('/home', 'HomeController@index')->name('home');

  Route::resource('/notices', 'NoticeController');
  Route::resource('/images', 'ImageController');
  Route::resource('/texts', 'TextController');
  Route::resource('/contacts', 'ContactController');

});

