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

Route::post('/projects/{project}/favorites', 'FavoriteController@store')->name('favorite');

Route::delete('/projects/{project}/favorites', 'FavoriteController@distory')->name('favorite.distory');

Route::get('/projects/{project}', 'ProjectController@show')->name('project');

Route::get('/tidings', 'TidingController@index')->name('tidings');

Route::get('/tidings/{tiding}', 'TidingController@show')->name('tiding');

Route::get('/properties', 'PropertyController@index')->name('properties');

Route::get('/properties/{property}', 'PropertyController@show')->name('property');

Route::get('/aboutus', 'AboutusController@index')->name('aboutus');

Route::get('/favorites', 'FavoriteController@index')->name('favorites');

Route::get('/billings', 'BillingController@index')->name('billings');

Route::patch('/billings/{billing}', 'BillingController@update')->name('billing');

Route::get('/reset', 'UserController@reset')->name('reset');

Route::patch('/users/{user}', 'UserController@update')->name('user.update');

# 用户点击登录按钮时请求的地址
Route::get('/auth/oauth', 'Auth\AuthController@oauth');

# 微信接口回调地址
Route::get('/auth/callback', 'Auth\AuthController@callback');
