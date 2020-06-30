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
    return view('index');
});
Route::get('/contact', 'PageController@contact');
Route::get('/auth/github', 'LoginController@socialProvider');
Route::get('/github', 'LoginController@socialProviderCallback');
