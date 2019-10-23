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

Auth::routes(['verify' => true]);

Route::get('/about', function () {
    return view('about');
});

Route::post('/search', 'ItemController@search')->name('search');
Route::get('/account', 'AccountController@show');

/**
 * 
 * User section
 */
Route::get('/additem', 'AccountController@index')->middleware('verified');
Route::get('/item', 'ItemController@showItem');
Route::get('/user/{id}', 'AccountController@getUserId');
Route::get('/viewitem', 'AccountController@view')->middleware('verified');

/*
*
* AI section
*
*/
Route::post('/createAi', 'ItemController@createAi')->middleware('verified');
Route::get('/item/ai/{id}', 'AiController@show')->name('Ai');
Route::get('/item/ai/{id}/edit', 'AiController@edit')->middleware('isAdmin');
Route::patch('/updateAi/{id}', 'AiController@update')->middleware('verfied');
Route::delete('/item/ai/{id}/delete', 'AiController@delete')->middleware('verfied');


/**
 * 
 * Equipment section
 */
Route::post('/createEquip', 'ItemController@createEquip')->middleware('verified');
Route::patch('/item/equip/{id}/update', 'EquipmentController@update')->middleware('verified');
Route::delete('/item/equip/{id}/delete', 'EquipmentController@delete')->middleware('verified');
Route::get('/item/equip/{id}', 'EquipmentController@show');
Route::get('/item/equip/{id}/edit', 'EquipmentController@edit')->middleware('isAdmin');


/**
 * 
 * 
 * Item section
 */
Route::post('/createItem', 'ItemController@createItem')->middleware('verified');
Route::patch('/item/items/{id}/update', 'ItemsController@update')->middleware('verified');
Route::delete('/item/items/{id}/delete', 'ItemsController@delete')->middleware('verfied');
Route::get('/item/items/{id}', 'ItemsController@show');
Route::get('/item/items/{id}/edit', 'ItemsController@edit')->middleware('isAdmin');

/**
 * 
 * Xtal section
 * 
 */
Route::post('/createXtal', 'ItemController@createXtal')->middleware('verified');
Route::patch('/item/xtal/{id}/update', 'XtalController@update')->middleware('verifed');
Route::delete('/item/xtal/{id/delete', 'XtalController@delete')->middleware('verfied');
