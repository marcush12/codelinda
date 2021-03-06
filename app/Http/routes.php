<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::resource('admin/users', 'AdminUsersController');


Route::get('/admin', function(){

    return view('admin.index');

});

Route::get('/admin', function(){

    return view('admin.users.index');
});
Route::get('/admin', function(){

    return view('admin.users.create');
});

Route::group(['middleware'=>'admin'], function(){

    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/posts', 'AdminPostsController');

});
Route::get('/', function(){

    return view('welcome');

});
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');




Route::auth();

Route::get('/home', 'HomeController@index');
