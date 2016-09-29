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

Route::get('/', 'HomeController@index');

Route::get('/blog', 'BlogController@indexAction');

Route::get('/blog/create', [
    'as' => 'blog_create_form',
    'uses' => 'BlogController@createAction',
]);

Route::post('/blog/create', [
    'as' => 'blog_create_action',
    'uses' => 'BlogController@storeAction',
]);
