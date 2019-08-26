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

/*
Route::any('/', 'Index\IndexController@index')->name('index');
Route::any('map.html', 'Index\IndexController@map');
Route::get('article/{id}.html', 'Index\IndexController@info');
Route::post('like.html', 'Index\IndexController@like');

Route::post('review.html', 'Index\IndexController@review');
Route::post('review_like.html', 'Index\IndexController@reviewLike');
Route::post('reply.html', 'Index\IndexController@reply');
Route::post('sync.html', 'Index\IndexController@sync');


Route::any('calendar/out.html', 'Calendar\CalendarController@out');

Route::any('admin/article.html', 'Admin\ArticleController@add')->name('article.add');
Route::any('admin/login.html', 'Admin\ArticleController@login');
Route::post('admin/save', 'Admin\ArticleController@save')->name('article.save');
*/


#Letter
Route::any('/', 'Letter\IndexController@index');
Route::any('about.html', 'Letter\IndexController@about');
Route::any('problem.html', 'Letter\IndexController@problem');
Route::any('time-letter.html', 'Letter\IndexController@letter');
Route::post('letter-save.html', 'Letter\IndexController@save');
Route::post('upload.html', 'UploadsController@upload');
