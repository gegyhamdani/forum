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
    return view('home');
});

//Route Forum
Route::get('forum', 'ForumController@index');
Route::get('forum/create', 'ForumController@create');
Route::get('forum/{forum}', 'ForumController@show');
Route::post('forum', 'ForumController@store');
Route::get('forum/{forum}/edit', 'ForumController@edit');
Route::patch('forum/{forum}', 'ForumController@update');
Route::delete('forum/{forum}', 'ForumController@destroy');

//Route Subforum
Route::get('subforum', 'SubforumController@index');
Route::get('subforum/{subforum}/allpost', 'SubforumController@allpost');
Route::get('subforum/create', 'SubforumController@create');
Route::get('subforum/{subforum}', 'SubforumController@show');
Route::post('subforum{forum}', 'ForumController@addSubForum');
Route::get('subforum/{subforum}/edit', 'SubforumController@edit');
Route::patch('subforum/{subforum}', 'SubforumController@update');
Route::delete('subforum/{subforum}', 'SubforumController@destroy');

//Route Posting
Route::get('Posting', 'PostingController@index');
Route::get('posting/create', 'PostingController@create');
Route::post('posting', 'PostingController@store');
Route::get('posting/{posting}', 'PostingController@show');
Route::post('posting/{posting}', 'PostingController@show');
Route::post('comment', 'PostingController@savecomment');
Route::get('Posting/{Posting}/edit', 'PostingController@edit');
Route::patch('Posting/{Posting}', 'PostingController@update');
Route::delete('Posting/{Posting}', 'PostingController@destroy');

//Route Comment
Route::get('Comment', 'CommentController@index');
Route::get('Comment/create', 'CommentController@create');
Route::get('Comment/{Comment}', 'CommentController@show');
Route::post('Comment', 'CommentController@store');
Route::get('Comment/{Comment}/edit', 'CommentController@edit');
Route::patch('Comment/{Comment}', 'CommentController@update');
Route::delete('Comment/{Comment}', 'CommentController@destroy');

//Route User
Route::get('user/login', 'UserController@login');
Route::get('user/register', 'UserController@create');
Route::post('user', 'UserController@store');
Route::post('user/loginPost', 'UserController@loginPost');
Route::get('user/logout', 'UserController@logout');
