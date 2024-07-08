<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class Soal4Controller extends Controller
{
    function soal4() {
        $res = Http::get('https://pastebin.com/raw/wUAzfJJD');

      
        // return view('soal4', $data);
        return $res->toJson();
    }
}
