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

Route::get('/home', 'UserController@index')->name('home');

Route::get('/projects', 'ProjectController@index')->name('projects');

Route::get('/projects/{project}', 'ProjectController@show')->name('project');

Route::get('/tidings', 'TidingController@index')->name('tidings');

Route::get('/tidings/{tiding}', 'TidingController@show')->name('tiding');

Route::get('/properties', 'PropertyController@index')->name('properties');

Route::get('/properties/{property}', 'PropertyController@show')->name('property');

Route::get('/aboutus', 'AboutusController@index')->name('aboutus');

Route::get('/favorites', 'AboutusController@index')->name('favorites');

Route::get('/billings', 'AboutusController@index')->name('billings');
