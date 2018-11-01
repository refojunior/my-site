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
    return view('frontend.home.index');
});


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');

Route::get('home', 'HomeController@index')->name('Home');
