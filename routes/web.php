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

Route::get('/home', 'Admin\HomeController@index');




Route::get('admin/news', ['as'=> 'admin.news.index', 'uses' => 'Admin\NewsController@index']);
Route::post('admin/news', ['as'=> 'admin.news.store', 'uses' => 'Admin\NewsController@store']);
Route::get('admin/news/create', ['as'=> 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
Route::put('admin/news/{news}', ['as'=> 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
Route::patch('admin/news/{news}', ['as'=> 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
Route::delete('admin/news/{news}', ['as'=> 'admin.news.destroy', 'uses' => 'Admin\NewsController@destroy']);
Route::get('admin/news/{news}', ['as'=> 'admin.news.show', 'uses' => 'Admin\NewsController@show']);
Route::get('admin/news/{news}/edit', ['as'=> 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
