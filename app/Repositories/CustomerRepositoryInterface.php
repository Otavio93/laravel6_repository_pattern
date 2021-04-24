<?php

namespace App\Repositories;


interface CustomerRepositoryInterface
{
    public function allFormated();

    public function findById($id);

    public function update($customerId);

    public function delete($customerId);

}
