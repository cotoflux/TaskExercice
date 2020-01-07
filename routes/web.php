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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'TaskController@index')->name('home')->middleware('auth');
Route::get('/create', 'TaskController@create')->name('home.create')->middleware('auth');
Route::post('/create', 'TaskController@store')->name('home.store')->middleware('auth');
Route::get('/show/{task}', 'TaskController@show')->name('home.show')->middleware('auth');
Route::post('/task/{task}', 'TaskController@update')->name('home.update')->middleware('auth');
Route::get('/task/{task}/edit', 'TaskController@edit')->name('home.edit')->middleware('auth');
Route::DELETE('/task/{task}', 'TaskController@destroy')->name('home.destroy')->middleware('auth');