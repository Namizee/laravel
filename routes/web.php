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
Route::get('/test', 'HomeController@test');
Route::get('/page/about', 'PageController@show');

Route::match(['get', 'post'], '/contact', function() {
	if ($_POST) {
		dump($_POST);
	}
	return view('contact');
});

Route::resource('/posts', 'PostController');