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
        $rooms = $this->roomService->getAll();
        return view('rooms/list', compact('rooms'));
    }

    public function showMajor()
    {
        $rooms = $this->roomService->getAll();
        return view('rooms/major', compact('rooms'));
    }

    public function create()
    {
        return view('/rooms/add');
    }

    public function store(Request $request)
    {
        $this->roomService->create($request);
        toastr()->success('Thêm mới phòng thành công!');
        return redirect()->route('rooms.index');
    }

    public function edit($id)
    {
        $room = $this->roomService->find($id);
        return view('/rooms/edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $room = $this->roomService->find($id);
        $this->roomService->update($room, $request);
        toastr()->success('Chỉnh sửa thành công!');
        return redirect()->route('rooms.major');
    }

    public function delete($id)
    {
        $room = $this->roomService->find($id);
        $this->roomService->destroy($room);
        toastr()->success('Xoá phòng thành công!');
        return redirect()->route('rooms.major');
    }
}
