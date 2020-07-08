<?php

namespace App\Http\Controllers;

use App\Bill;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        $bills = Bill::all();
        return view('/bills/list', compact('bills'));
    }

    public function create()
    {
        return view('/bills/add');
    }

    public function store(Request $request)
    {
        $bill = new Bill();
        $bill->date = $request->date;
        $bill->type = $request->price;
        $bill->room_id = $request->room_id;
        $bill->save();
        toastr()->success('Thêm mới bill thành công!');
        return redirect()->route('bills.index');
    }
}
