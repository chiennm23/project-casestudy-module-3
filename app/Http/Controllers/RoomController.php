<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRoomRequest;
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
        $count= Room::where('status','Đang trống ')->count();
        $count1= Room::where('status','Đang có khách  ')->count();
        $count2= Room::where('status','Đang sửa chữa  ')->count();
        $count3= Room::where('status','Đang vệ sinh  ')->count();
        return view('rooms/list', compact('rooms','count','count1','count2','count3'));
    }

    public function showMajor()
    {
        $rooms = $this->roomService->getAll();
        return view('rooms/major', compact('rooms'));
    }

    public function create()
    {
        if (!$this->userCan('admin')) {
            abort(403, 'Bạn không có quyền này');
        }
        return view('/rooms/add');
    }

    public function store(ValidateRoomRequest $request)
    {
        if (!$this->userCan('admin')) {
            abort(403, 'Bạn không có quyền này');
        }
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
        if (!$this->userCan('admin')) {
            abort(403, 'Bạn không có quyền này');
        }
        $room = $this->roomService->find($id);
        $this->roomService->destroy($room);
        toastr()->success('Xoá phòng thành công!');
        return redirect()->route('rooms.major');
    }

}
