<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ComicController@index')->name('index');
Route::get('/comic/create', 'ComicController@create')->name('create');
Route::post('/comic/store', 'ComicController@store')->name('store');
Route::get('/comic/show', 'ComicController@show')->name('show');
Route::get('/comic/edit', 'ComicController@edit')->name('edit');
Route::get('/comic/update', 'ComicController@update')->name('update');
Route::get('/comic/destroy', 'ComicController@destroy')->name('destroy');
