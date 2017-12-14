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

//Creation
Route::get('/create', 'CreateController@index');