<?php


namespace App\Http\Services;


use App\Customer;
use App\Http\Repositories\CustomerRepository;

class CustomerService
{
    protected $customerRepo;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }

    public function getAll()
    {
        return $this->customerRepo->getAll();
    }

    public function create($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->idCard = $request->card;
        $customer->phone = $request->phone;
        $customer->save();
    }

    public function find($id)
    {
        return $this->customerRepo->findById($id);
    }

    public function update($request, $customer)
    {
        $customer->name = $request->name;
        $customer->idCard = $request->card;
        $customer->phone = $request->phone;
        $this->customerRepo->save($customer);
    }

    public function destroy($id)
    {
        $this->customerRepo->delete($id);
    }

    public function findByClosure($attr, $value)
    {
        return $this->customerRepo->findByClosure($attr, $value);
    }

}
