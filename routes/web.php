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

Route::post('/search', 'ItemController@search')->name('search');

/**
 * 
 * User section
 */
Route::get('/account', 'AccountController@index')->middleware('auth');
Route::get('/item', 'ItemController@showItem');
Route::get('/user/{id}', 'AccountController@getUserId');
Route::get('/viewitem', 'AccountController@view')->middleware('auth');

/*
*
* AI section
*
*/
Route::post('/createAi', 'ItemController@createAi')->middleware('auth');
Route::get('/item/ai/{id}', 'AiController@show')->name('Ai');
Route::get('/item/ai/{id}/edit', 'AiController@edit')->middleware('isAdmin');
Route::patch('/updateAi/{id}', 'AiController@update')->middleware('auth');
Route::delete('/item/ai/{id}/delete', 'AiController@delete')->middleware('auth');


/**
 * 
 * Equipment section
 */
Route::post('/createEquip', 'ItemController@createEquip')->middleware('auth');
Route::patch('/item/equip/{id}/update', 'EquipmentController@update')->middleware('auth');
Route::delete('/item/equip/{id}/delete', 'EquipmentController@delete')->middleware('auth');
Route::get('/item/equip/{id}', 'EquipmentController@show');
Route::get('.item/equip/{id}/edit', 'EquipmentController@edit')->middleware('isAdmin');



