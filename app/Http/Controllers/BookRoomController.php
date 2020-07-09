<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Customer;
use App\Http\Requests\ValidateCustomerRequest;
use App\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookRoomController extends Controller
{
    public function index($id)
    {
        $room = Room::findOrFail($id);
        return view('bookings.booking', compact('room'));
    }


    public function create(ValidateCustomerRequest $request, $id)
    {
        $room = Room::findOrFail($id);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->idCard = $request->card;
        $customer->phone = $request->phone;
        $customer->save();

        $bill = new Bill();
        $bill->date = $request->day;
        $bill->timeStart = $request->time;
        $bill->price = $request->price;
        $bill->room_id = $room->id;
        $bill->save();

        $room->status = $request->status;
        $room->price = $request->price;
        $room->save();

        $room->customers()->attach($customer->id);
        toastr()->success('Đặt phòng thành công');
        return redirect()->route('rooms.index');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $bills= Bill::all();
        return view('bookings.exitRoom', compact('room','bills'));
    }

    public function update($id)
    {
        $room = Room::findOrFail($id);
        $room->status= Checkout::CHECKOUT;
        $room->save();

        toastr()->success('Thanh toán thành công');
        return redirect()->route('rooms.index');

    }
}
