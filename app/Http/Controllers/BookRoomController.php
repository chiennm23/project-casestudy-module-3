<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class BookRoomController extends Controller
{
    public function index($id)
    {
        $room = Room::findOrFail($id);
        return view('bookings.booking', compact('room'));
    }


    public function create(Request $request)
    {

    }
}
