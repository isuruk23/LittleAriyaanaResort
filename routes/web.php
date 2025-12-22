<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\PageController;


use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/rooms', function () {
//     return view('rooms');
// });
Route::get('/rooms', [PageController::class, 'rooms'])->name('rooms');

Route::get('/facilities', function () {
    return view('facilities');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/booking/book', [BookingController::class, 'book'])->name('booking.book');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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



 Route::get('/sitemap.xml', function () {

    $sitemap = Sitemap::create()
        ->add(Url::create('/')
            ->setPriority(1.0)
            ->setChangeFrequency('daily')
        )
        ->add(Url::create('/about'))
        ->add(Url::create('/rooms'))
        ->add(Url::create('/facilities'))
        ->add(Url::create('/gallery'))
        ->add(Url::create('/contact'));

    // Dynamic pages example
    // foreach (App\Models\Post::all() as $post) {
    //     $sitemap->add(Url::create("/post/{$post->slug}"));
    // }

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return response()->file(public_path('sitemap.xml'));
});
