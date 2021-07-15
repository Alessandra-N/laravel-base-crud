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
Route::post('/comic', 'ComicController@store')->name('store');
Route::get('/comic/{comics}/show', 'ComicController@show')->name('show');
Route::get('/comic/{comics}/edit', 'ComicController@edit')->name('edit');
Route::put('/comic/{comics}/update', 'ComicController@update')->name('update');
Route::delete('/comic/{comics}/destroy', 'ComicController@destroy')->name('destroy');

// Route::resource('comics', 'ComicController');
