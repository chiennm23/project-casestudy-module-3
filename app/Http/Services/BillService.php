<?php


namespace App\Http\Services;


use App\Http\Repositories\BillRepository;

class BillService
{
    protected $billRepo;

    public function __construct(BillRepository $billRepo)
    {
        $this->billRepo = $billRepo;
    }

    public function getAll()
    {
        return $this->billRepo->getAll();
    }

    public function save($bill)
    {
        $bill->save();
    }

    public function findById($id)
    {
        return $this->billRepo->findById($id);
    }

    public function update($request, $bill)
    {
        $bill->date = $request->date;
        $bill->TimeStart = $request->timeStart;
        $bill->price = $request->price;
        $bill->timeOut= $bill->room()->timeOut;
        $bill->status= $request->status;
        $this->billRepo->save($bill);
    }

}
