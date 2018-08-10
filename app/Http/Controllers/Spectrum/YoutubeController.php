<?php

namespace App\Http\Controllers\Spectrum;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class YoutubeController extends Controller{

    //Get Youtube Video ID from database
    $VideoID = DB::table('videos')->get();

    // Set API Key
    $ApiKey = 'AIzaSyDEwPpFGRrJdcoVxqTAWIEPKN5yDxhldbY';

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.googleapis.com/youtube/v3/videos/?id=$VideoID&part=snippet%2CcontentDetails%2Cstatistics&key=$ApiKey",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Postman-Token: 5a0f872b-175b-4eb3-965b-73fcfffb9747"
  ),
));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
    echo "cURL Error #:" . $err;
    } else {
    echo $response;
    }

}




