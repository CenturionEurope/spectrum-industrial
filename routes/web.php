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

// General Pages //
Route::get('/', function () {
    $posts = App\Post::all();
    return view('welcome', compact('posts'));
});

// Templating Pages //


// Single Posts from the News Section //
Route::get('post/{slug}', function($slug){
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    $posts = App\Post::all();
	return view('post', compact('post','posts'));
});

// Custom Routes Below this Point //

// LESS Controller //
Route::get('/Resources/LESS', ['uses' =>'Spectrum\LessController@Less']);

// Voyager Admin //
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
