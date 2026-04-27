<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

Route::resource('/mobil', MobilController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mobils', [MobilController::class, 'index']);