<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users/{id}', 'Admin\UserController@getUserById');
Route::get('/searchitem', 'AutoCompleteController@search');
Route::get('/searchability', 'AutoCompleteController@searchAbility');
Route::get('/searchequip', 'AutoCompleteController@searchEquip');
Route::get('/searchal', 'AutoCompleteController@searchAL');
Route::get('/searchmaterial', 'AutoCompleteController@searchMaterial');
Route::get('/searchcrystas', 'AutoCompleteController@searchCrystas');
Route::get('/searchrelic', 'AutoCompleteController@searchRelic');