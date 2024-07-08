<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $mahasiswa = Mahasiswa::with('jurusan')->get();
        
        return $mahasiswa->toJson(JSON_PRETTY_PRINT);
    }
}
