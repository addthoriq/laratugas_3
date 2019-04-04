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
// Route::resource('/users', 'UserController');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/users/{name}/edit', 'UserController@edit')->name('users.edit');
Route::get('/users/{name}', 'UserController@show')->name('users.show');
Route::post('/users', 'UserController@store')->name('users.store');
Route::put('/users/{name}', 'UserController@update')->name('users.update');
Route::delete('/users/{name}', 'UserController@destroy')->name('users.destroy');

Route::get('/articles', 'ArticleController@index')->name('articles.index');

//Auth
Route::get('/login', 'AuthController@loginForm')->name('auth.login-form');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
