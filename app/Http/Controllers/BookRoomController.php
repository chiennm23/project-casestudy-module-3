<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRoomController extends Controller
{
    public function show()
    {
        return view('/bookings/booking');
    }
}
