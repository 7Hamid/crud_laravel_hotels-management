<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

Route::get('/', function () {
    return view('navbar');
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('hotels',HotelController::class);
