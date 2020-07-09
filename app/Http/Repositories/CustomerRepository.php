<?php


namespace App\Http\Repositories;


use App\Customer;

class CustomerRepository
{
    protected $customerModel;

    public function __construct(Customer $customerModel)
    {
        $this->customerModel = $customerModel;
    }

    public function getAll()
    {
        return $this->customerModel->all();
    }

    public function save($customer)
    {
        $customer->save();
    }

    public function findById($id)
    {
        return $this->customerModel->findOrFail($id);
    }

    public function delete($customer)
    {
        $customer->delete();
    }

    public function findByClosure($attr, $value)
    {
        return $this->customerModel->where($attr,$value)->first();
    }

}
