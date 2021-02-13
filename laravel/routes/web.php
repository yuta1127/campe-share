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


Auth::routes();
Route::get('/', 'TopController@top');
Route::resource('/articles', 'ArticleController')->only(['index','show']);
Route::get('/home', 'HomeController@index')->name('home');
