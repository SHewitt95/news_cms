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

Route::resource('admin/posts', 'NewPostController');

Route::get('/', 'MyController@index')->name('sayhello');

Route::get('/admin', 'MyController@admin')->name('adminPage');

/*

Route::get('/admin/authors', 'AuthorController@view_all_authors')->name('allAuthors');

Route::get('/admin/departments', 'DeptController@view_all_departments')->name('allDepartments');

Route::get('/admin/packages', 'PackageController@view_all_packages')->name('allPackages');

Route::get('/admin/photos', 'PhotoController@view_all_photos')->name('allPhotos');

Route::get('/admin/posts', 'PostController@view_all_posts')->name('allPosts');

Route::get('/admin/new_post', 'PostController@new_post')->name('newPost');

Route::post('/admin/new_post', 'PostController@make_new_post')->name('makeNewPost');

Route::get('/admin/new_author', 'AuthorController@new_author')->name('newAuthor');

Route::post('/admin/new_author', 'AuthorController@make_new_author')->name('makeNewAuthor');

Route::get('/admin/new_dept', 'DeptController@new_dept')->name('newDept');

Route::post('/admin/new_dept', 'DeptController@make_new_dept')->name('makeNewDept');

Route::get('/admin/new_package', 'PackageController@new_package')->name('newPackage');

Route::post('/admin/new_package', 'PackageController@make_new_package')->name('makeNewPackage');

Route::get('/admin/edit_post/{id}', 'PostController@edit_post')->name('editPost');

Route::post('/admin/edit_post/{id}', 'PostController@save_post')->name('savePost');

Route::get('/admin/edit_dept/{id}', 'DeptController@edit_dept')->name('editDept');

Route::get('/admin/edit_package/{id}', 'PackageController@edit_package')->name('editPackage');

*/
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
