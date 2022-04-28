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

Route::get('/','Admin\ProductController@index')->name('index');
Route::get('/show-cart','Admin\ProductController@showcart')->name('index.showcart');

Route::post('/session','Admin\SessionControler@create_session')->name('index.session');
Route::post('/delete-session','Admin\SessionControler@delete_session')->name('index.delete_session');

Route::group(['prefix' => 'history'], function () {
    Route::get('/dinh_dynasty','Admin\HistoryController@dinh_dynasty')->name('history.dinh_dynasty');
    Route::get('/ly_dynasty', 'Admin\HistoryController@ly_dynasty')->name('history.ly_dynasty');
    Route::get('/ho_dynasty', 'Admin\HistoryController@ho_dynasty')->name('history.ho_dynasty');
    Route::get('/tran_dynasty', 'Admin\HistoryController@tran_dynasty')->name('history.tran_dynasty');
    Route::get('/ngo_dynasty', 'Admin\HistoryController@ngo_dynasty')->name('history.ngo_dynasty');
});








