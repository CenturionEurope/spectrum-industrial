<?php

namespace App\Http\Controllers\Spectrum;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class URLController extends Controller
{
    // Create a clean URL
    public function CleanURL($string)
    {
        // allow only letters
        $res = preg_replace("/[^a-zA-Z]/", "", $string);        

        // make lowercase
        $res = strtolower($res);

        // return
        return $res;
    }

    // Create a clean image URL for product pages
    public function CleanImageURL($string)
    {
        // Makes a connection to the database products table and pulls ProductImage column
        $ProductImage = DB::table('products')->pluck('ProductImage')->get();      

        // replace malformed URL from Voyager
        $resimage = preg_replace("", "", $string);         

        // return
        return $resimage;
    }

    // Create a clean Meta Description
    public function CleanProductDescMeta($string)
    {
        // allow only letters
        $resdesc = preg_replace("/[^a-zA-Z]/", "", $string);

        // trim what's left to 150 chars
        $resdesc = substr($resdesc, 0, 150);

        // make lowercase
        $resdesc = strtolower($resdesc);

        // return
        return $resdesc;
    }
}