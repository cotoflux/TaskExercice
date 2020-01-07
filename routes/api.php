<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); 


Route::get('/task', 'Api\TaskController@index')->name('task')->middleware('auth');
Route::get('/task/{task}', 'Api\TaskController@show')->name('task.show')->middleware('auth');
Route::post('/task', 'Api\TaskController@store')->name('task.store')->middleware('auth');
Route::put('/task/{task}', 'Api\TaskController@update')->name('task.update')->middleware('auth');
Route::delete('/task/{task}', 'Api\TaskController@destroy')->name('task.delete')->middleware('auth');


