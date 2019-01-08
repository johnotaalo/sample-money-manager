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

Route::get('/usage/add', 'UsageController@index')->name('add-usage');

Route::get('/gef', 'Local\GefController@index')->name('gef');
Route::get('/gef/esern', 'Local\GefController@esern')->name('gef-esern');
