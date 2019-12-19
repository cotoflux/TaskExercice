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


Route::get('/task', 'Api\TaskController@index')->name('task');
Route::get('/task/{task}', 'Api\TaskController@show')->name('task.show');
Route::post('/task', 'Api\TaskController@store')->name('task.store');
Route::put('/task/{task}', 'Api\TaskController@update')->name('task.update');
Route::delete('/task/{task}', 'Api\TaskController@destroy')->name('task.delete');


