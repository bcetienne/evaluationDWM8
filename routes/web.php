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

//Accueil
Route::get('/', 'BaseController@index');

//Liste
Route::get('/list', 'ListController@index');

//Update
Route::get('/update/{id}', 'ListController@updateOne');

//Delete
Route::get('/delete/{id}', 'ListController@delete');

//Creation
Route::get('/create', 'ListController@create');
Route::post('/create/{id}', 'ListController@createAction');