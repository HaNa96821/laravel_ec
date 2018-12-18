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

Route::get('/', 'TaskController@index');

Route::resource('/photos', 'PhotosController',['only' => ['create','store']]);

Route::get('/image', function () {
    return view('image');
});
//Route::post('/file_edit','TaskController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
