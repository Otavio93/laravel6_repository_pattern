<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Repositories\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    private $customerRepository;


    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        // Binded interface at RepositoyServiceProvider
        $this->customerRepository = $customerRepository;
    }


    public function index()
    {
        $customers = $this->customerRepository->allFormated();

        dd($customers);
    }
    

    public function show($customerId)
    {
        return $this->customerRepository->findById($customerId);
    }


    public function store($customerId)
    {
        $this->customerRepository->update($customerId);

        return redirect('/customers/' . $customerId);
    }


    public function destroy($customerId)
    {
        $this->customerRepository->delete($customerId);
        return "The customer with id {$customerId} has been deleted";
    }


    public function create()
    {
        //
    }


    public function update(Request $request)
    {
        //
    }


    public function edit(Customers $customers)
    {
        //
    }

}


