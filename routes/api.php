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


Route::get("student/{id}","StudentController@show");
Route::post("student","StudentController@store");
Route::get("students","StudentController@all");

Route::delete("students/{id}","StudentController@delete");