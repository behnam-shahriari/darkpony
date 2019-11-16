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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PostsController@index');

//Route::resource('posts', 'PostsController');

Route::get('posts', 'PostsController@index');
Route::post('posts/store', 'PostsController@store');
Route::get('posts/create', 'PostsController@create');
Route::get('posts/{id}', 'PostsController@show');
Route::get('posts/{id}/edit', 'PostsController@edit');
Route::put('posts/{id}', 'PostsController@update');
Route::get('posts/{id}/delete', 'PostsController@destroy');

Route::get('categories', 'CategoriesController@index');
Route::post('categories/store', 'CategoriesController@store');
Route::get('categories/create', 'CategoriesController@create');
Route::get('categories/{id}', 'CategoriesController@show');
Route::get('categories/{id}/edit', 'CategoriesController@edit');
Route::put('categories/{id}', 'CategoriesController@update');
Route::get('categories/{id}/delete', 'CategoriesController@destroy');