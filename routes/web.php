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

  Route::get('/','StudentController@index');

  Route::get('/abc','StudentController@created')->name('abc');

  Route::post('/store','StudentController@store');

  Route::get('edit/{id}','StudentController@edit')->name('edit');
  Route::post('update/{id}','StudentController@update')->name('update');
  Route::delete('delete/{id}','StudentController@delete')->name('delete');



  