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

Route::get('roles', 'RoleController@index');
Route::get('roles/{role}', 'RoleController@show');
Route::post('roles', 'RoleController@store');
Route::put('roles/{role}', 'RoleController@update');
Route::delete('roles/{role}', 'RoleController@delete');

Route::get('categories', 'CategoryController@index');
Route::get('categories/{category}', 'CategoryController@show');
Route::post('categories', 'CategoryController@store');
Route::put('categories/{category}', 'CategoryController@update');
Route::delete('categories/{category}', 'CategoryController@delete');

Route::get('ingredients', 'IngredientController@index');
Route::get('ingredients/{ingredient}', 'IngredientController@show');
Route::post('ingredients', 'IngredientController@store');
Route::put('ingredients/{ingredient}', 'IngredientController@update');
Route::delete('ingredients/{ingredient}', 'IngredientController@delete');

Route::get('permissions', 'PermissionController@index');
Route::get('permissions/{permission}', 'PermissionController@show');
Route::post('permissions', 'PermissionController@store');
Route::put('permissions/{permission}', 'PermissionController@update');
Route::delete('permissions/{permission}', 'PermissionController@delete');

Route::get('statuses', 'StatusController@index');
Route::get('statuses/{status}', 'StatusController@show');
Route::post('statuses', 'StatusController@store');
Route::put('statuses/{status}', 'StatusController@update');
Route::delete('statuses/{status}', 'StatusController@delete');

Route::get('dishes', 'DishController@index');
Route::get('dishes/{dish}', 'DishController@show');
Route::post('dishes', 'DishController@store');
Route::put('dishes/{dish}', 'DishController@update');
Route::delete('dishes/{dish}', 'DishController@delete');
