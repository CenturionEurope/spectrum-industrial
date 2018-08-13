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
    $Api = (object)array(
        'Posts' => App\Post::all(),
        // 'YouTube' => app('App\Http\Controllers\Spectrum\YoutubeController')->GetVideos() - Turned off
    );    
    return view('pages.welcome')->with('Api', $Api);
});

// All Posts (News Page)
Route::get('news', function(){
    $Api = (object)array(
        'Posts' => App\Post::all()
    );    
	return view('pages.news')->with('Api', $Api);
});

// All Products (Primary Products Page)
Route::get('products', function(){
    $products = App\Product::all();        
	return view('pages.productrange', compact('products'));
});

//Category Page
Route::get('category/{Category}', function($Category){
    $Api = (object)array(
        'Product' => app('App\Http\Controllers\Spectrum\ProductController')->GetProduct($Category),
    );
	return view('pages.category')->with('Api', $Api);
});


// Templating Pages
// Single Posts from the News Section 
Route::get('post/{slug}', function($slug){
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    $Api = (object)array(
        'Posts' => App\Post::all()
    );    
	return view('pages.post', compact('post','Api'));
});

//Single Product
Route::get('product/{slug}', function($slug){

    $Api = (object)array(
        'Product' => app('App\Http\Controllers\Spectrum\ProductController')->GetProduct($slug),
        'Posts' => App\Post::all()        
    );

	return view('pages.product')->with('Api', $Api);
});

// Custom Routes Below this Point 
// LESS Controller 
Route::get('/Resources/LESS', ['uses' =>'Spectrum\LessController@Less']);

// Voyager Admin 
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// RSS Feed
Route::feeds();
