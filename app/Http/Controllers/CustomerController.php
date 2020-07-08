<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\ValidateCustomerRequest;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    public function create()
    {
        $rooms = Room::all();
        return view('customers.create', compact('rooms'));
    }

    public function store(ValidateCustomerRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->idCard = $request->card;
        $customer->phone = $request->phone;
        $customer->save();
        toastr()->success('Thêm khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $rooms = Room::all();
        return view('customers.edit', compact('customer', 'rooms'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->idCard = $request->card;
        $customer->phone = $request->phone;
        $customer->save();
        toastr()->success('Chỉnh sửa khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        toastr()->success('Xoá khách hàng thành công');
        return redirect()->route('customers.index');
    }
}
