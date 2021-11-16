<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


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
    return "SELAMAT DATANG";
});

Route::get('/home', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "tittle" => "About"
    ]);
});

Route::get('/profile', [MahasiswaController::class, "index"]);
