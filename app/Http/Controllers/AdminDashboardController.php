<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Room;
use App\Models\Booking;

class AdminDashboardController extends Controller
{
     public function index()
    {
        $rooms_count = Room::count();          // Total rooms
        $bookings_count = Booking::count();    // Total bookings

        return view('admin.dashboard', compact('rooms_count','bookings_count'));
    }
}
