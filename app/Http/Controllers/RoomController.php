<?php

namespace App\Http\Controllers;

use App\Http\Services\RoomService;
use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function index()
    {
        $rooms = $this->roomService->getAllRoom();
        return view('rooms/list', compact('rooms'));
    }
    public function showMajor()
    {
        $rooms = $this->roomService->getAllRoom();
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
        toastr()->success('Chỉnh sửa thành công!');
        return redirect()->route('rooms.major');
    }

    public function delete($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('rooms.major');
    }
}
