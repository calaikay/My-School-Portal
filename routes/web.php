<?php

Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
    return view('welcome');
	})->name('home');

	Route::post('/signup', [
		'uses' =>'UserController@postSignUp', 
		'as' => 'signup'
		]);

	Route::post('/signin', [
		'uses' =>'UserController@postSignIn', 
		'as' => 'signin'
		]);

	Route::get('/logout', [
		'uses' => 'UserController@getLogout',
		'as' => 'logout'
		]);

	Route::get('viewprofile', [
		'uses' => 'PagesController@view',
		'middleware' => 'auth'
		]);

	Route::get('account', [
		'uses' => 'UserController@account',
		'as'=> 'account'
		]);

	Route::get('updateaccount', [
		'uses' => 'UserController@saveAccount',
		'as' => 'account.save'
		]);

	Route::get('/dashboard', [
		'uses' => 'PostController@getDashboard',
		'as' => 'dashboard', 
		'middleware' => 'auth'
		]);


	Route::post('/createpost', [
		'uses' => 'PostController@postCreatePost',
		'as' => 'post.create',
		'middleware' => 'auth'
		]);

	Route::get('/delete-post/{post_id}',[
		'uses' => 'PostController@getDeletePost',
		'as' => 'post.delete',
		'middleware' => 'auth'
		]);

	Route::get('about', [
		'uses' => 'PagesController@about',
		'middleware' => 'auth'
		]);

	Route::get('gallery', [
		'uses' => 'PagesController@gallery',
		'middleware' => 'auth'
		]);
	Route::get('search', 'UserController@search');


	Route::get('editpost/{id}', 'PostController@editpost');
	Route::patch('editpost/{id}/update', 'PostController@update');
	
});