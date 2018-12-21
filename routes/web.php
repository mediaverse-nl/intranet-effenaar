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

//Route::get('/', function () {
//    return view('welcome');
//});
//
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::get('/dashboard', 'HomeController@index');

Route::get('/nieuws', 'HomeController@index');
Route::get('/events', 'HomeController@index');
Route::get('/question-of-the-week', 'HomeController@index');
Route::get('/agenda', 'HomeController@index');

Route::get('/user', 'HomeController@index');
