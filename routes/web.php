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


Route::get('/', 'HomeController@index');

Auth::routes(['verify' => true]);

Route::get('/about', 'HomeController@about');

Route::get('/scammers', function () {
    return view('scammers');
});

Route::get('/tutorial', 'HomeController@tutorial');

Route::get('/search', 'SearchController@search')->name('search');
Route::get('/account', 'AccountController@show')->middleware('auth' );

/**
 * 
 * User section
 */
Route::get('/additem', 'AccountController@index')->middleware('verified' );
Route::get('/item', 'ItemController@showItem');
Route::get('/user/{id}', 'AccountController@getUserId');
Route::get('/viewitem', 'AccountController@view')->middleware('verified' );
Route::post('user/update/discord', 'AccountController@addDiscordLink')->middleware('auth' );
Route::post('/user/update/facebook', 'AccountController@addFacebookLink')->middleware('auth' );

/*
*
* AI section
*
*/
Route::post('/createAi', 'ItemController@createAi')->middleware('verified');
Route::get('/item/al/{id}', 'AiController@show')->name('Ai');
Route::get('/item/al/{id}/edit', 'AiController@edit')->middleware('isAdmin');
Route::patch('/item/al/{id}/update', 'AiController@update')->middleware('verified' );
Route::delete('/item/al/{id}/delete', 'AiController@delete')->middleware('verified' );


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
Route::post('/createItem', 'ItemController@createItem')->middleware('verified' );
Route::patch('/item/items/{id}/update', 'ItemsController@update')->middleware('verified');
Route::delete('/item/items/{id}/delete', 'ItemsController@delete')->middleware('verified');
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
Route::prefix('admin')->group(function(){
    Route::get('/', 'Admin\AdminController@index');
    Route::get('/irunaitem', 'Admin\AdminController@viewIrunaItem');
    Route::get('/item/{id}', 'Admin\AdminController@showItem');
    Route::post('/item/edit/{id}', 'Admin\AdminController@editItem');
    Route::get('/search', 'Admin\AdminController@searchItem');
    Route::get('/createitem', 'Admin\AdminController@createItemView');
    Route::post('/item/create', 'Admin\AdminController@addItem');
    Route::get('/messages', 'Admin\MessageController@fetchAllMessages');
    Route::get('/friends', 'Admin\MessageController@fetchFriendship');
});




Route::get('/sitemap', 'SitemapController@index');

Route::get('/messages/{user}', 'MessageController@fetch');
Route::post('/messages/{user}', "MessageController@sendMessage");
Route::get('/private', "MessageController@index");
Route::get('/users', 'MessageController@users');

Route::post('/addFriend/{id}', 'FriendController@add');
Route::get('/notification', 'MessageController@showUnreadMessage');

Route::prefix('item')->group(function(){
    Route::get('/xtal/{id}', 'ItemViewController@getXtalItemId');
    Route::get('/equip/{id}', 'ItemViewController@getEquipmentItemId');
    Route::get('/material/{id}', 'ItemViewController@getMaterialItemId');
    Route::get('/alcrystas/{id}', 'ItemViewController@getAlItemId');
    Route::get('/relic/{id}', 'ItemViewController@getRelicItemId');
});

Route::prefix('status')->group(function(){
    Route::get('/', 'Data\IrunaItemController@ItemStatistic')->middleware('isAdmin');
});

Route::prefix('wiki/editor')->group(function(){
    Route::get('/item/add', 'Wiki\WikiController@showAddWiki');
});
