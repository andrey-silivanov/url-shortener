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

Route::get('/', [
    'as'   => 'main',
    'uses' => 'LinkController@index'
]);

Route::post('/store', [
    'as'   => 'store',
    'uses' => 'LinkController@store'
]);

Route::get('/{shortCode}', [
   'as' => 'redirect',
   'uses' => 'LinkController@redirect'
]);