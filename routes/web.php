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
    return view('welcome');
});

Auth::routes();

Route::get('/about', function () {
    return view('about');
});
Route::get('/account', 'AccountController@index')->middleware('auth');
Route::post('/createAi', 'ItemController@createAi')->middleware('auth');
Route::get('/item/ai/{id}', 'AiController@show');
Route::get('/item', 'ItemController@showItem');
Route::get('/user/{id}', 'AccountController@getUserId');
Route::get('/item/ai/{id}/edit', 'AiController@edit')->middleware('auth');
Route::patch('/updateAi/{id}', 'AiController@update')->middleware('auth');

