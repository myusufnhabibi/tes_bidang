<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Soal2Controller extends Controller
{   
    function soal2(Request $request) {
        $res = Http::get('https://reqres.in/api/users');

        $data['users'] = $res->json()['data'];
        return view('soal2', $data);
    }

}
