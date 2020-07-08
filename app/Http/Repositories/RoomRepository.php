<?php


namespace App\Http\Repositories;


use App\Room;


class RoomRepository
{
    protected $roomModel;

    public function __construct(Room $roomModel)
    {
        $this->roomModel = $roomModel;
    }

    public function getAll()
    {
        return $this->roomModel->all();
    }

    public function save($room)
    {
        $room->save();
    }

    public function findById($id)
    {
        return $this->roomModel->findOrFail($id);
    }

    public function delete($room)
    {
        $room->delete();
    }
}
