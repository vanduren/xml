<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mtownsend\XmlToArray\XmlToArray;

class TestController extends Controller
{
    public function test()
    {
        // cijfers.xml is in storage/app
        $contents = Storage::disk('local')->get('cijfers.xml');
        // dd($contents);
        $array = XmlToArray::convert($contents);
        // dd($array);
        // dus de array bestaat uit drie elementen
        // maak dus een tabel met deze drie elementen
        // en loop door de array en maak records
        // in de database
        foreach($array as $key => $valueArray) {
            // key is de naam van het element (button)
            // value is de inhoud van het element
            // dd($valueArray);
            foreach($valueArray as $elementArray) {
                // dd($elementArray['Xcoord']);
                // dus hier de velden vullen met arrayelementen
                // aangezien velden en elementen zelfde naam hebben
                // massassignment (let op model aanpassen)
                Test::create($elementArray);
            }
        }
    }
}
