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

Route::get('/','StaticController@showWelcome')->name('home');
Route::post('/', 'UserController@register')->name('register');


Route::get('/tour','StaticController@showTour')->name('tour');
Route::get('/product','StaticController@showProduct')->name('product');
Route::post('/ProductInsert','StaticController@AddProduct')->name('prod');



Route::get('/contact','StaticController@showContact');
Route::redirect('/contact','/',301);


// https://www.youtube.com/watch?v=C5pS0PoHcrU
