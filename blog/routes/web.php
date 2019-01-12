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
Route::get('contact','pagescontroller@getContact');
Route::get('about', 'pagescontroller@getAbout');

Route::get('/','pagescontroller@getIndex');
Route::get('welcome','pagescontroller@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts','PostController');