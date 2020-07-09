<?php


namespace App\Http\Repositories;


use App\Bill;

class BillRepository
{
    protected $billModel;

    public function __construct(Bill $billModel)
    {
        $this->billModel = $billModel;
    }

    public function getAll()
    {
        return $this->billModel->all();
    }

}
