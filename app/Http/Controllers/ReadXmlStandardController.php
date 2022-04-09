<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadXmlStandardController extends Controller
{
    public function index()
    {
        $xmlDataString = file_get_contents(public_path('sample-course.xml'));
        $xmlObject = simplexml_load_string($xmlDataString);
        // dd($xmlObject);
        $json = json_encode($xmlObject);
        // dd($json);
        $phpDataArray = json_decode($json, true);
        // echo "<pre>";
        // print_r($phpDataArray);
        // dd($phpDataArray);
        // dd($phpDataArray['course']);
        dd($phpDataArray['course'][0]['name']);
    }
}
