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

Route::get('/','StudentsController@index')->name('home');
Route::get('create','StudentsController@create')->name('create');
Route::post('create','StudentsController@store')->name('store');
Route::get('edit/{id}','StudentsController@edit')->name('edit');
Route::post('update/{id}','StudentsController@update')->name('update');
Route::delete('delete/{id}','StudentsController@delete')->name('delete');

Route::get('dynamic', 'ProductsController@index');

Route::post('dynamic/fetch', 'ProductsController@fetch')->name('dynamic.fetch');
