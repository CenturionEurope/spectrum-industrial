<?php

namespace App\Http\Controllers\Spectrum;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller{

    public function search(Request $request)
    {
        $request->input('search');

            DB::table('products')->get();         
            DB::table('categories')->get();

            return();
}

