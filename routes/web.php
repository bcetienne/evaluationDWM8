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

//Home
Route::get('/', 'BaseController@index');

//List
Route::get('/list', 'ListController@index');

//Update
Route::get('/update/{id}', 'ListController@update');
Route::post('/update/launch', 'ListController@updateAction');

//Delete
Route::get('/delete/{id}', 'ListController@delete');

//Creation
Route::get('/create', 'ListController@create');
Route::post('/create/{id}', 'ListController@createAction');