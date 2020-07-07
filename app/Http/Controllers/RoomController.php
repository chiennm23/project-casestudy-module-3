<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use function Sodium\compare;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms/list', compact('rooms'));
    }
    public function showMajor()
    {
        $rooms = Room::all();
        return view('rooms/major', compact('rooms'));
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
        toastr()->success('Thêm mới phòng thành công!');
        return redirect()->route('rooms.index');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('/rooms/edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->name = $request->name;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->status = $request->status;
        $room->save();
        return redirect('rooms/major', compact('room'));
    }

}
