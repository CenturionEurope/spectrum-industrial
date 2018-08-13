<?php

namespace App\Http\Controllers\Spectrum;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DataController extends Controller
{   

    public function GetDatasheets()
    { 
        return DB::table('datasheets')->get();
    }

    public function GetInfographics()
    {
        return DB::table('infographics')->get();
    }

    public function GetLiterature()
    {
        return DB::table('literatures')->get();
    }

    


}