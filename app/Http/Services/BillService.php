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

}
