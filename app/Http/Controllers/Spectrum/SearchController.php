<?php

namespace App\Http\Controllers\Spectrum;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller{

    public function search(Request $request)
    {
        $request->input('search');

            DB::table('products')
            ->where('ProductName', 'like', 'search')
            -get();
                   
            DB::table('categories')
            ->where('name', 'like', 'search')
            ->get();

            return();
}

