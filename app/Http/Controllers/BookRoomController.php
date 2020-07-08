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
        $bill->date = Carbon::now()->toDateString();
        $bill->price = $request->price;
        $bill->room_id = $room->id;
        $bill->save();

        $customer1 = Customer::all();
        $key = $customer1[count($customer1) - 1]['id'];
        $room->customers()->attach($key);

        $room->status = $request->status;
        $room->price = $request->price;
        $room->save();

        return redirect()->route('rooms.index');

    }
}
