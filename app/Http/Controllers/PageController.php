<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

class PageController extends Controller
{
    public function rooms()
    {
        $rooms = Room::latest()->get();
        return view('rooms', compact('rooms'));
    }

}
