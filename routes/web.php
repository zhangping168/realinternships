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

Route::get('/', 'HomeController@index');

Route::get('/posts', 'PostController@index');

Route::get('/apply', function () {
    return 'apply';
});

Route::get('/whyisfree', function () {
    return 'whyisfree';
});

Route::get('/whatweoffer', function () {
    return 'whatweoffer';
});


Route::get('/aboutus', function () {
    return 'aboutus';
});

Route::get('/contactus', function () {
    return 'contactus';
});

Route::get('/blog', function () {
    return 'blog';
});
Auth::routes();

Route::get('/logout', function(){
	Auth::logout();
	return redirect('/');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard');

Route::group([ 'namespace'=>'Admin', 'prefix'=>'admin'], function(){
	Route::get('/', 'AdminController@index');
	Route::post('/', 'AdminController@store');
});


Route::get('/posts','PostController@index');
Route::get('/posts/search','PostController@search');
Route::get('/posts/{id}','PostController@show');
Route::get('/posts/save/{id}','PostController@save');

//upload resume

Route::get('upload', 'UploadResumeController@index');
