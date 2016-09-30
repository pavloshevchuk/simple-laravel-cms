<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index',
]);

Route::get('/dashboard', [
    'as' => 'dashboardIndex',
    'uses' => 'DashboardController@indexAction',
]);

Route::get('/dashboard/blog', [
    'as' => 'dashboardBlogEntries',
    'uses' => 'DashboardController@blogReadAction',
]);

Route::get('/dashboard/blog/create', [
    'as' => 'dashboardBlogForm',
    'uses' => 'DashboardController@blogFormAction',
]);

Route::post('/dashboard/blog/create', [
    'as' => 'dashboardBlogStore',
    'uses' => 'DashboardController@blogStoreAction',
]);
