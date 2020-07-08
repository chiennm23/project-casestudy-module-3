<?php


namespace App\Http\Services;


use App\Http\Repositories\RoomRepository;
use App\Room;

class RoomService
{

    protected $roomRepo;

    public function __construct(RoomRepository $roomRepo)
    {
        $this->roomRepo = $roomRepo;
    }

    public function getAll()
    {
        return $this->roomRepo->getAll();
    }

    public function create($request)
    {
        $room = new Room();
        $room->name = $request->name;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->status = $request->status;
        $this->roomRepo->save($room);
    }

    public function find($id)
    {
        return $this->roomRepo->findById($id);
    }

    public function update($room, $request)
    {
        $room->name = $request->name;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->status = $request->status;
        $this->roomRepo->save($room);
    }

    public function destroy($id)
    {
        $this->roomRepo->delete($id);
    }
}
