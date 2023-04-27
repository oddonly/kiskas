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

Route::get('/', 'ClientController@index')->name('home');

Route::get('/D040593-1', 'ClientController@D040593')->name('D040593');

Route::get('/D040593-2', 'ClientController@D0405932')->name('D040593-2');

Route::get('/D040593-3', 'ClientController@D0405933')->name('D040593-3');

Route::get('/cek1', 'ClientController@cek1')->name('cek1');

Route::get('/cek1a', 'ClientController@cek1a')->name('cek1a');

Route::get('/cek2', 'ClientController@cek2')->name('cek2');

Route::get('/cek2a', 'ClientController@cek2a')->name('cek2a');

Route::get('/cek3', 'ClientController@cek3')->name('cek3');

Route::get('/cek3a', 'ClientController@cek3a')->name('cek3a');
