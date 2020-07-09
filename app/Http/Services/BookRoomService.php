<?php


namespace App\Http\Services;


use App\Bill;
use App\Customer;
use App\Http\Repositories\BillRepository;
use App\Http\Repositories\BookRoomRepository;
use App\Http\Repositories\CustomerRepository;
use App\Http\Repositories\RoomRepository;

class BookRoomService
{
    protected $bookRoomRepo;
    protected $customerRepo;
    protected $roomRepo;
    protected $billRepo;

    public function __construct(BookRoomRepository $bookRoomRepo,
                                RoomRepository $roomRepo,
                                CustomerRepository $customerRepository,
                                BillRepository $billRepo)
    {
        $this->bookRoomRepo = $bookRoomRepo;
        $this->customerRepo = $customerRepository;
        $this->roomRepo = $roomRepo;
        $this->billRepo = $billRepo;
    }

    public function booking($customer,
                            $request,
                            $room)
    {
        if (!$customer) {
            $customer = new Customer();
            $customer->name = $request->name;
            $customer->idCard = $request->card;
            $customer->phone = $request->phone;
            $this->customerRepo->save($customer);
        }
        $bill = new Bill();
        $bill->date = $request->day;
        $bill->TimeStart = $request->time;
        $bill->price = $request->price;
        $bill->room_id = $room->id;
        $this->billRepo->save($bill);

        $room->status = $request->status;
        $room->price = $request->price;
        $this->roomRepo->save($room);
        $this->roomRepo->attachCustomer($room, $customer);
    }
}
