<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Customer;
use App\Http\Requests\ValidateCustomerRequest;
use App\Http\Services\BillService;
use App\Http\Services\BookRoomService;
use App\Http\Services\CustomerService;
use App\Http\Services\RoomService;
use App\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class BookRoomController extends Controller
{

    protected $roomService;
    protected $customerService;
    protected $bookRoomService;
    protected $billService;

    public function __construct(RoomService $roomService,
                                CustomerService $customerService,
                                BookRoomService $bookRoomService,
                                BillService $billService)
    {
        $this->roomService = $roomService;
        $this->customerService  = $customerService;
        $this->bookRoomService = $bookRoomService;
        $this->billService = $billService;
    }

    public function index($id)
    {
        $room = $this->roomService->find($id);
        return view('bookings.booking', compact('room'));
    }

    public function create(ValidateCustomerRequest $request, $id)
    {
        $room = $this->roomService->find($id);
        $customer = $this->customerService->findByClosure('idCard',$request->card);
        DB::beginTransaction();
        try {
            $this->bookRoomService->booking($customer, $request, $room);
            DB::commit();
            toastr()->success('Đặt phòng thành công');
            return redirect()->route('rooms.index');
        } catch (Exception $exception){
            DB::rollBack();
        }
    }

    public function edit($id)
    {
        $room = $this->roomService->find($id);
        $bills= $this->billService->getAll();
        return view('bookings.exitRoom', compact('room','bills'));
    }

    public function update($id)
    {
        $room = $this->roomService->find($id);
        $room->status= Checkout::CHECKOUT;
        $this->roomService->save($room);
        toastr()->success('Thanh toán thành công');
        return redirect()->route('rooms.index');
    }
}
