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

//后台
Route::prefix('admin')->middleware('auth')->group(function(){
     Route::get('main','admin\view\IndexController@main')->name('main');
     Route::get('list','admin\view\ArticleController@list')->name('list');
     Route::resource('article','admin\api\ArticleController');
     Route::resource('articlecat','admin\api\ArticleCatController');

});




//前端路由
Route::get('/','StaticPageController@home')->name('home');
Route::get('/help', 'StaticPageController@help')->name('help');
Route::get('/about', 'StaticPageController@about')->name('about');

Route::get('/signup','UsersController@create')->name('signup');
Route::resource('users','UsersController');




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');



