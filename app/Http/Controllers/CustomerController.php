<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\ValidateCustomerRequest;
use App\Http\Services\CustomerService;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->getAll();
        return view('customers.list', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(ValidateCustomerRequest $request)
    {
        $this->customerService->create($request);
        toastr()->success('Thêm khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customer = $this->customerService->find($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = $this->customerService->find($id);
        $this->customerService->update($request, $customer);
        toastr()->success('Chỉnh sửa khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        $customer = $this->customerService->find($id);
        $this->customerService->destroy($customer);
        toastr()->success('Xoá khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function search(Request $request)
    {
        $cards = Customer::where('idCard','LIKE', '%' . $request->card . '%')->get();
        return response()->json($cards);
    }
}
