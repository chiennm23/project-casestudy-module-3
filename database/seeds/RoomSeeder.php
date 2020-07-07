<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = new \App\Room();
        $room->name = 'P101';
        $room->type = 'Phòng Đơn';
        $room->price = '300.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P102';
        $room->type = 'Phòng Đơn';
        $room->price = '300.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P103';
        $room->type = 'Phòng Đơn';
        $room->price = '300.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P201';
        $room->type = 'Phòng Đơn';
        $room->price = '300.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P202';
        $room->type = 'Phòng Đơn';
        $room->price = '300.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P203';
        $room->type = 'Phòng Đơn';
        $room->price = '300.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P301';
        $room->type = 'Phòng Đôi';
        $room->price = '700.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P302';
        $room->type = 'Phòng Đơn';
        $room->price = '300.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P401';
        $room->type = 'Phòng Đôi';
        $room->price = '700.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P402';
        $room->type = 'Phòng Đơn';
        $room->price = '300.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P501';
        $room->type = 'Phòng Đôi';
        $room->price = '700.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
        $room = new \App\Room();
        $room->name = 'P502';
        $room->type = 'Phòng Đơn';
        $room->price = '300.000/Ngày';
        $room->status = 'Đang trống';
        $room->save();
    }
}
