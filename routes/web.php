<?php

use Illuminate\Support\Facades\Route;

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