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

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('event')->group(function () {
    Route::get('/', 'EventController@index')->name('index');
    Route::get('/create', 'EventController@create')->name('create');
    Route::post('/store', 'EventController@store')->name('store');
    Route::get('/edit/{id}', 'EventController@edit')->name('edit');
    Route::post('/update{id}', 'EventController@update')->name('update');
    Route::post('/delete{id}', 'EventController@delete')->name('delete');
    Route::get('/search', 'EventController@delete')->name('delete');
});

