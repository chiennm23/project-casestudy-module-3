<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms/list', compact('rooms'));
    }

    public function create()
    {
        return view('/rooms/add');
    }

    public function store(Request $request)
    {
        $room = new Room();
        $room->name = $request->name;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->status = $request->status;
        $room->save();
        return redirect()->route('rooms.index');
    }
}
