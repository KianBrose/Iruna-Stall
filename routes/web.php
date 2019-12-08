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

Route::get('/scammers', function () {
    return view('scammers');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/guides', function () {
    return view('guides');
});

Route::get('/guides/ninja1', function () {
    return view('guides/ninja1');
});

Route::get('/guides/ninja2', function () {
    return view('guides/ninja2');
});

Route::get('/guides/samurai1', function () {
    return view('guides/samurai1');
});

Route::get('/guides/samurai2', function () {
    return view('guides/samurai2');
});

Route::get('/guides/ministrel1', function () {
    return view('guides/ministrel1');
});

Route::get('/guides/alchemist1', function () {
    return view('guides/alchemist1');
});

Route::get('/guides/monk1', function () {
    return view('guides/monk1');
});

Route::get('/guides/bishop1', function () {
    return view('guides/bishop1');
});

Route::get('/guides/servant1', function () {
    return view('guides/servant1');
});

Route::get('/search', 'SearchController@search')->name('search');
Route::get('/account', 'AccountController@show')->middleware('auth', 'checkblocked');

/**
 * 
 * User section
 */
Route::get('/additem', 'AccountController@index')->middleware('verified', 'checkblocked');
Route::get('/item', 'ItemController@showItem');
Route::get('/user/{id}', 'AccountController@getUserId');
Route::get('/viewitem', 'AccountController@view')->middleware('verified', 'checkblocked');
Route::post('user/update/discord', 'AccountController@addDiscordLink')->middleware('auth', 'checkblocked');
Route::post('/user/update/facebook', 'AccountController@addFacebookLink')->middleware('auth', 'checkblocked');

/*
*
* AI section
*
*/
Route::post('/createAi', 'ItemController@createAi')->middleware('verified', 'checkblocked');
Route::get('/item/al/{id}', 'AiController@show')->name('Ai');
Route::get('/item/al/{id}/edit', 'AiController@edit')->middleware('isAdmin');
Route::patch('/item/al/{id}/update', 'AiController@update')->middleware('verified', 'checkblocked');
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

