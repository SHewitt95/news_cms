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

/*Route::get('/welcome', function () {
    return view('welcome');
});*/

Route::get('/', 'MyController@index')->name('sayhello');

Route::get('/welcome', 'MyController@index2')->name('saywelcome');

Route::get('/admin', 'MyController@admin')->name('adminPage');

Route::get('/admin/authors', 'MyController@view_all_authors')->name('allAuthors');

Route::get('/admin/departments', 'MyController@view_all_departments')->name('allDepartments');

Route::get('/admin/packages', 'MyController@view_all_packages')->name('allPackages');

Route::get('/admin/photos', 'MyController@view_all_photos')->name('allPhotos');

Route::get('/admin/posts', 'MyController@view_all_posts')->name('allPosts');

Route::get('/admin/new_post', 'MyController@new_post')->name('newPost');

Route::post('/admin/new_post', 'MyController@make_new_post')->name('makeNewPost');


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

Route::group(['middleware' => ['web']], function () {
    //
});
