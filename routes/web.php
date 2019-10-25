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

Route::get('/', "HomeController@index");
Route::post('/', "HomeController@sendEmail");
Route::post('/subs', "HomeController@subscribe");
Route::post('/subs2', "HomeController@subscribe2");
