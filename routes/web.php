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

Route::get('/', 'ShopController@index');

Route::get('/mycart' , 'ShopController@mycart')->middleware('auth');
Route::post('/mycart' , 'ShopController@cart_put')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::delete('/mycart', 'ShopController@destroy')->name('cart.destroy')->middleware('auth');