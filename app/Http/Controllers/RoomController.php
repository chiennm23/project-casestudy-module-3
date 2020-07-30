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
//        $count = Room::groupBy('status')->selectRaw('count(*) as total,status')->get();
        $count1 = Room::where('status', 'Đang trống')->count();
        $count2 = Room::where('status', 'Đang có khách')->count();
        $count3 = Room::where('status', 'Đang vệ sinh')->count();
        $count4 = Room::where('status', 'Đang sửa chữa')->count();
        $sum = $count1 + $count2 + $count3 + $count4;
        return view('rooms/list', compact('rooms', 'count1', 'count2', 'count3', 'count4','sum'));
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

    public function searchByStatus($status)
    {
        $rooms = Room::where('status', $status)->get();
        $count1 = Room::where('status', 'Đang trống')->count();
        $count2 = Room::where('status', 'Đang có khách')->count();
        $count3 = Room::where('status', 'Đang vệ sinh')->count();
        $count4 = Room::where('status', 'Đang sửa chữa')->count();
        return view('rooms.search', compact('rooms', 'count1', 'count2', 'count3', 'count4'));
    }


}
