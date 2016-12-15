<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'servers'], function() {
Route::get('/', 'ServersController@index')->name('servers.index');

Route::get('/create', 'ServersController@create')->name('servers.create');
Route::post('/create', 'ServersController@save')->name('servers.save');

Route::get('/update/{id}', 'ServersController@edit')->name('servers.edit');
Route::put('/update', 'ServersController@update')->name('servers.update');

Route::get('/remove/{id}', 'ServersController@delete')->name('servers.remove');
});

Route::group(['prefix' => 'users'], function() {
Route::get('/', 'UsersController@index')->name('users.index');

Route::get('/create', 'UsersController@create')->name('users.create');
Route::post('/create', 'UsersController@save')->name('users.save');

Route::get('/update', 'UsersController@edit')->name('users.edit');
Route::put('/update', 'UsersController@update')->name('users.update');

Route::get('/remove', 'UsersController@delete')->name('users.edit');
});
