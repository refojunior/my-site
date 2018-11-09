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

Route::get('/testing', function(){
	$img = Image::make('img/invite.jpg');
	$img->fit(350, 180, function ($constraint) {
	    $constraint->upsize();
	});
	return $img->response('jpg');
});


//route for dashboard (admin)

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('backend/category', 'CategoryController');

Route::resource('backend/article', 'ArticleController')->middleware('auth');

Route::get('backend/search', 'ArticleController@searching')->middleware('auth')->name('article.search');

Route::get('tags/search/{id}', 'TagController@search')->middleware('auth')->name('tags.search');


