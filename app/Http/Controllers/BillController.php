<?php

namespace App\Http\Controllers;

use App\Bill;

use App\Http\Services\BillService;
use Illuminate\Http\Request;

class BillController extends Controller
{
    protected $billService;

    public function __construct(BillService $billService)
    {
        $this->billService = $billService;
    }

    public function index()
    {
        $bills = $this->billService->getAll();
        return view('/bills/list', compact('bills'));
    }

    public function edit($id)
    {
        $bill = $this->billService->findById($id);
        return view('bills.edit', compact('bill'));
    }

    public function update(Request $request, $id)
    {
        $bill = $this->billService->findById($id);
        $this->billService->update($request, $bill);

        toastr()->success('Update thanh toan thành công');
        return redirect()->route('rooms.index');
    }
}
