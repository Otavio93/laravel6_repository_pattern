<?php

namespace App\Repositories;

use App\Models\Customers;

class CustomerRepository implements CustomerRepositoryInterface
{

    public function allFormated()
    {
        return Customers::orderBy('name')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map(function ($customer) {
                return $customer->format();
            });
    }


    public function findById($id)
    {
        return Customers::where('id', $id)
            ->where('active', 1)
            ->with('user')
            ->firstOrFail()
            ->format();
    }


    public function update($customerId)
    {
        Customers::findOrFail($customerId)->update( request()->all() );
    }


    public function delete($customerId)
    {
        Customers::where('id', $customerId)->delete();
    }
}
