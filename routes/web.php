<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;


// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/rooms', function () {
//     return view('rooms');
// });
// Route::get('/facilities', function () {
//     return view('facilities');
// });
// Route::get('/gallery', function () {
//     return view('gallery');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::post('/booking/book', [BookingController::class, 'book'])->name('booking.book');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Only admin can access
Route::middleware(['auth','admin'])->group(function(){
      Route::middleware('auth')->get('/admin/dashboard', [AdminDashboardController::class,'index'])->name('admin.dashboard');
      Route::middleware('auth')->get('/admin/room', [RoomController::class,'index'])->name('admin.room');
        Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::post('/rooms/{id}/update', [RoomController::class, 'update'])->name('rooms.update');
    Route::get('/rooms/{id}/delete', [RoomController::class, 'destroy'])->name('rooms.destroy');

          Route::middleware('auth')->get('/admin/booking', [BookingController::class,'index'])->name('admin.booking');
        Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::post('/booking/{id}/update', [BookingController::class, 'update'])->name('booking.update');
    Route::get('/booking/{id}/delete', [BookingController::class, 'destroy'])->name('booking.destroy');
});

// Normal user dashboard
Route::middleware(['auth'])->group(function(){
    Route::middleware('auth')->get('/user/dashboard', [UserDashboardController::class,'index'])->name('user.dashboard');

});

