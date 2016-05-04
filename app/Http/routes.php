<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MyController@index')->name('sayhello');

Route::get('/post/{id}', 'NewPostController@show')->name('showPost');

Route::get('/photo/{id}', 'NewPhotoController@show')->name('showPhoto');

Route::get('/package/{id}', 'NewPackageController@show')->name('showPackage');

Route::get('/posts', 'NewPostController@showAll')->name('showPosts');

Route::get('/photos', 'NewPhotoController@show')->name('showPhotos');

Route::get('/packages', 'NewPackageController@show')->name('showPackages');

Route::get('json', 'NewPostController@posts_json')->name('pjson');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'MyController@admin')->name('adminPage');

    Route::resource('admin/posts', 'NewPostController');

    Route::resource('admin/authors', 'NewAuthorController');

    Route::resource('admin/departments', 'NewDeptController');

    Route::resource('admin/packages', 'NewPackageController');

    Route::resource('admin/photos', 'NewPhotoController');

    Route::get('/home', 'HomeController@index');
});
