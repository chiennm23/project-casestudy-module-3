<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\ValidateCustomerRequest;
use App\Http\Services\CustomerService;
use Illuminate\Http\Request;


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
        if (!$this->userCan('admin')) {
            abort(403,'Bạn không có quyền này');
        }
        return view('customers.create');
    }

    public function store(ValidateCustomerRequest $request)
    {
        if (!$this->userCan('admin')) {
            abort(403,'Bạn không có quyền này');
        }
        $this->customerService->create($request);
        toastr()->success('Thêm khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        if (!$this->userCan('admin')) {
            abort(403,'Bạn không có quyền này');
        }
        $customer = $this->customerService->find($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        if (!$this->userCan('admin')) {
            abort(403,'Bạn không có quyền này');
        }
        $customer = $this->customerService->find($id);
        $this->customerService->update($request, $customer);
        toastr()->success('Chỉnh sửa khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        if (!$this->userCan('admin')) {
            abort(403,'Bạn không có quyền này');
        }
        $customer = $this->customerService->find($id);
        $customer->rooms()->detach();
        $this->customerService->destroy($customer);
        toastr()->success('Xoá khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function search(Request $request)
    {
        $cards = Customer::where('idCard', 'LIKE', '%' . $request->card . '%')->get();
        return response()->json($cards);
    }

    public function getCustomer($id)
    {
       return $this->customerService->find($id);
    }
}
