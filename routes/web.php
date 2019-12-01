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

Route::get('/', "APIController@main");
Route::get('/black_friday',"APIController@main");
Route::get('/check',"APIController@Check");
Route::get('/update',"APIController@Update");
Route::get('/laptops',"APIController@Laptops");
Route::get('/smartphones',"APIController@Smartphones");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
