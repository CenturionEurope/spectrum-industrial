<?php

namespace App\Http\Controllers\Spectrum;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    public function GatherMaterials(){

        /* Gather the information from the database table provided */
        $Materials = DB::table('materials')->get();

        /* Return the data to the view */
        return view('welcome', ['materials' => $Materials]);
             
    }
}