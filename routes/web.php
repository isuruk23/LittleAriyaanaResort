<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/rooms', function () {
    return view('rooms');
});
Route::get('/facilities', function () {
    return view('facilities');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
