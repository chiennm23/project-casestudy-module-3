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

    public function save($bill)
    {
        $bill->save();
    }

    public function findById($id)
    {
        return $this->billModel->findOrFail($id);
    }

    public function delete($customer)
    {
        $customer->delete();
    }

}
