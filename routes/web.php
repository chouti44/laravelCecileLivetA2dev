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


Route::get('/articles', 'BlogController@articles');

Route::get('/article/{id}', 'BlogController@article');

Route::get('/contact', 'ContactController@contact');

Route::get('/', 'HomeController@index');
