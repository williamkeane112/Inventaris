<?php

use App\Http\Controllers\JenisController;
use App\Http\Controllers\RuangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function() {
    return view("home");
});
Route::resource('jenis', JenisController::class);
Route::resource('ruang', RuangController::class);

Auth::routes();

