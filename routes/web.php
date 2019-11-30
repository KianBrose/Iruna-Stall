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

Route::post('/search', 'SearchController@search')->name('search');
Route::get('/account', 'AccountController@show');

/**
 * 
 * User section
 */
Route::get('/additem', 'AccountController@index')->middleware('verified', 'checkblocked');
Route::get('/item', 'ItemController@showItem');
Route::get('/user/{id}', 'AccountController@getUserId');
Route::get('/viewitem', 'AccountController@view')->middleware('verified');

/*
*
* AI section
*
*/
Route::post('/createAi', 'ItemController@createAi')->middleware('verified', 'checkblocked');
Route::get('/item/al/{id}', 'AiController@show')->name('Ai');
Route::get('/item/al/{id}/edit', 'AiController@edit')->middleware('isAdmin');
Route::patch('/updateAl/{id}', 'AiController@update')->middleware('verified', 'checkblocked');
Route::delete('/item/al/{id}/delete', 'AiController@delete')->middleware('verified', 'checkblocked');


/**
 * 
 * Equipment section
 */
Route::post('/createEquip', 'ItemController@createEquip')->middleware('verified', 'checkblocked');
Route::patch('/item/equip/{id}/update', 'EquipmentController@update')->middleware('verified', 'checkblocked');
Route::delete('/item/equip/{id}/delete', 'EquipmentController@delete')->middleware('verified', 'checkblocked');
Route::get('/item/equip/{id}', 'EquipmentController@show');
Route::get('/item/equip/{id}/edit', 'EquipmentController@edit')->middleware('isAdmin');


/**
 * 
 * 
 * Item section
 */
Route::post('/createItem', 'ItemController@createItem')->middleware('verified', 'checkblocked');
Route::patch('/item/items/{id}/update', 'ItemsController@update')->middleware('verified', 'checkblocked');
Route::delete('/item/items/{id}/delete', 'ItemsController@delete')->middleware('verified', 'checkblocked');
Route::get('/item/items/{id}', 'ItemsController@show');
Route::get('/item/items/{id}/edit', 'ItemsController@edit')->middleware('isAdmin');

/**
 * 
 * Xtal section
 * 
 */
Route::post('/createXtal', 'ItemController@createXtal')->middleware('verified');
Route::patch('/item/xtal/{id}/update', 'XtalController@update')->middleware('verified');
Route::delete('/item/xtal/{id}/delete', 'XtalController@delete')->middleware('verified');


/**
 * 
 * Relic section
 */

 Route::post('/createRelic', 'ItemController@createRelic')->middleware('verified');
 Route::patch('/item/relic/{id}/update', 'RelicController@update')->middleware('verified');
 Route::delete('/item/relic/{id}/delete', 'RelicController@delete')->middleware('verified');



Route::post('/user/updatepassword', 'ProfileController@update')->middleware('verified');
Route::delete('/user/delete', 'ProfileController@delete')->middleware('verified');


Route::post('/item/add', 'IrunaitemController@add')->middleware('isAdmin');

/**
 * Admin
 */

Route::get('/admin', 'Admin\AdminController@index');

