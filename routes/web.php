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

Route::get('/', 'Frontend\HomeController@index');


//ADMIN ROUTES

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('backend/category', 'CategoryController');

Route::resource('backend/article', 'ArticleController')->middleware('auth');

Route::get('backend/search', 'ArticleController@searching')->middleware('auth')->name('article.search');

Route::get('backend/tags/search/{id}', 'TagController@search')->middleware('auth')->name('tags.search');



//HOME PAGE ROUTES
Route::get('/contact', function(){
	return view('frontend.contact-form');
});

Route::get('articles', 'Frontend\ArticleController@index')->name('articles');

Route::get('/{title}', 'Frontend\ArticleController@read')->name('articles.read');

Route::get('articles/tags/{id}', 'Frontend\ArticleController@searchTags')->name('articles.tag');

Route::get('articles/search', 'Frontend\ArticleController@searchArticle')->name('articles.search');

