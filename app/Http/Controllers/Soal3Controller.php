<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\soal3;

class Soal3Controller extends Controller
{
    function soal3(Request $request) {
        $data = Soal3::get();

        return $data->toJson(JSON_PRETTY_PRINT);
    }
}
