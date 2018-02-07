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
    return view('main');
})->name('main');
Route::get('/schedule', 'ScheduleController@index');
Route::get('/news/{id}', 'NewsController@show');
Route::get('/news', 'NewsController@index');


// Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();


    Route::group(['as'     => 'voyager.menus.', 'prefix' => 'menus/{menu}', 'middleware' => 'admin.user',], function ()  {
        Route::get('builder', ['uses' => 'Voyager\CustomVoyagerMenuController@builder',    'as' => 'builder']);
        Route::post('order', ['uses' => 'Voyager\CustomVoyagerMenuController@order_item', 'as' => 'order']);

        Route::group(['as'     => 'item.', 'prefix' => 'item',
        ], function () {
            Route::delete('{id}', ['uses' => 'Voyager\CustomVoyagerMenuController@delete_menu', 'as' => 'destroy']);
            Route::post('/', ['uses' => 'Voyager\CustomVoyagerMenuController@add_item',    'as' => 'add']);
            Route::put('/', ['uses' => 'Voyager\CustomVoyagerMenuController@update_item', 'as' => 'update']);
        });
    });
});
