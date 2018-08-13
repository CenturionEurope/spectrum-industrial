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
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()
            // 'YouTube' => app('App\Http\Controllers\Spectrum\YoutubeController')->GetVideos() - Turned off
        );    
        return view('pages.welcome')->with('Api', $Api);
    });

// All Posts (News Page)
    Route::get('news', function(){
        $Api = (object)array(
            'Posts' => App\Post::all(),
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()
        );    
        return view('pages.news')->with('Api', $Api);
    });

// All Products (Show all product categories)
    Route::get('product-categories', function(){        
        $Api = (object)array(
            'Categories' => app('App\Http\Controllers\Spectrum\ProductController')->GetCategories(),
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()
        );
        return view('pages.productrange')->with('Api', $Api);
    });

//Category Page
    Route::get('category/{Category}', function($Category){
        $Api = (object)array(
            'Product' => app('App\Http\Controllers\Spectrum\ProductController')->GetProduct($Category),
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()
        );
        return view('pages.category')->with('Api', $Api);
    });


// Templating Pages
// Single Posts from the News Section 
    Route::get('news/{slug}', function($slug){
        $post = App\Post::where('slug', '=', $slug)->firstOrFail();
        $Api = (object)array(
            'Posts' => App\Post::all(),
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()
        );    
        return view('pages.post', compact('post','Api'));
    });

//Single Product
    Route::get('product/{slug}', function($slug){
        $Api = (object)array(
            'Product' => app('App\Http\Controllers\Spectrum\ProductController')->GetProduct($slug),
            'Posts' => App\Post::all(),
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()        
        );
        return view('pages.product')->with('Api', $Api);
    });

// Data Sheets
    Route::get('data-sheets', function(){        
        $Api = (object)array(
            'Datasheets' => app('App\Http\Controllers\Spectrum\DataController')->GetDatasheets(),
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()
        );
        return view('pages.datasheets')->with('Api', $Api);
    });

// Infographics
    Route::get('infographics', function(){        
        $Api = (object)array(
            'Infographics' => app('App\Http\Controllers\Spectrum\DataController')->GetInfographics(),
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()
        );
        return view('pages.infographics')->with('Api', $Api);
    });

// Literature
    Route::get('literature', function(){        
        $Api = (object)array(
            'Literature' => app('App\Http\Controllers\Spectrum\DataController')->GetLiterature(),
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()
        );
        return view('pages.literature')->with('Api', $Api);
    });

// Material Information
    Route::get('material-information', function(){        
        $Api = (object)array(
            'Materials' => app('App\Http\Controllers\Spectrum\DataController')->GetMaterials(),
            'Posts' => App\Post::all(),
            'Slides' => app('App\Http\Controllers\Spectrum\DataController')->GetSlides()
        );
        return view('pages.materials')->with('Api', $Api);
    });

// Custom Routes Below this Point 
// LESS Controller 
    Route::get('/Resources/LESS', ['uses' =>'Spectrum\LessController@Less']);

// Voyager Admin 
    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });


