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
Route::permanentRedirect('/', '/posts');

Route::namespace('Posts')->prefix('posts')->group(function () {
    Route::get('', 'PostsController@index');
    Route::post('store', 'PostsController@store');
    Route::get('create', 'PostsController@create');
    Route::get('/{id}', 'PostsController@show');
    Route::get('/{id}/edit', 'PostsController@edit');
    Route::put('/{id}', 'PostsController@update');
    Route::delete('/{id}', 'PostsController@destroy');
    Route::get('/{id}/delete', 'PostsController@delete');
});


Route::namespace('Categories')->prefix('categories')->group(function () {
    Route::get('', 'CategoriesController@index');
    Route::post('store', 'CategoriesController@store');
    Route::get('create', 'CategoriesController@create');
    Route::get('/{id}', 'CategoriesController@show');
    Route::get('/{id}/edit', 'CategoriesController@edit');
    Route::put('/{id}', 'CategoriesController@update');
    Route::delete('/{id}', 'CategoriesController@destroy');
    Route::get('/{id}/delete', 'CategoriesController@delete');
});