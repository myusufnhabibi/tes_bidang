<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Soal2Controller; 
use App\Http\Controllers\Soal3Controller; 
use App\Http\Controllers\MahasiswaController; 
use App\Http\Controllers\Soal4Controller; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soal1', function() {
    return view('soal1');
});

Route::get('/soal2', [Soal2Controller::class, 'soal2']);
Route::get('/soal3', [Soal3Controller::class, 'soal3']);
Route::get('/soal4', [Soal4Controller::class, 'soal4']);
Route::get('/soal6', [MahasiswaController::class, 'index']);