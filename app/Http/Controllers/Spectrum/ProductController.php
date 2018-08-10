<?php

namespace App\Http\Controllers\Spectrum;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function GetProduct($Slug)
    {
        $Product = DB::table('products')->where('slug',$Slug)->first();
        $Product->CategoryInfo= DB::table('categories')->where('id',$Product->Category)->first();
        //dd($Product);
        return $Product;
    }

}