<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', 'App\Http\Controllers\UserController@register');
Route::post('/login', 'App\Http\Controllers\UserController@login');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/tasks', 'App\Http\Controllers\TaskController@index');
    Route::get('/tasks/{id}', 'App\Http\Controllers\TaskController@show');
    Route::post('/tasks', 'App\Http\Controllers\TaskController@store');
    Route::put('/tasks/{id}', 'App\Http\Controllers\TaskController@update');
    Route::delete('/tasks/{id}', 'App\Http\Controllers\TaskController@destroy');
});
