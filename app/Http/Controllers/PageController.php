<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

class PageController extends Controller
{
    public function index()
    {
        $rooms = Room::where('is_active', 'active')->get();
        return view('home', compact('rooms'));
    }
    public function rooms()
    {
        $rooms = Room::where('is_active', 'active')->get();
        return view('rooms', compact('rooms'));
    }

}
