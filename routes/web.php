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
    return view('pages.welcome', compact('posts'));
});

// Templating Pages //

// Single Posts from the News Section //
Route::get('post/{slug}', function($slug){
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    $posts = App\Post::all();
	return view('pages.post', compact('post','posts'));
});

// All Posts (News Page)
Route::get('news', function($slug){
    $posts = App\Post::all();        
	return view('pages.news', compact('posts'));
});


//Single Product
Route::get('product/{slug}', function($slug){
    $product = App\Product::where('slug', '=', $slug)->firstOrFail();    
    $posts = App\Post::all();
	return view('pages.product', compact('product','posts'));
});

// All Products (Primary Products Page)
Route::get('products', function($slug){
    $products = App\Product::all();        
	return view('pages.productrange', compact('products'));
});

// Custom Routes Below this Point //

// LESS Controller //
Route::get('/Resources/LESS', ['uses' =>'Spectrum\LessController@Less']);

// Voyager Admin //
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
