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
})->name("home");
Route::get('/write', function () {
    return view('admin.write_post');
})->name("write");
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/auth/github', 'LoginController@socialProvider');
Route::get('/github', 'LoginController@socialProviderCallback');
/**
 * admin route okiAA
 */
Route::get('/admin/login', function () {
    return view('admin.index');
})->name("admin.login");
Route::get('/admin', function () {
    return view('admin.dasboard');
})->name("admin.dashboard");
