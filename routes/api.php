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


Route::get('/posts', "ApiController@posts");
Route::get('/posts/{slug}', "ApiController@post");

Route::get('/schedule', "ApiController@schedules");
Route::get('/schedule/{id}', "ApiController@schedule");