<?php

namespace App\Interfaces;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

interface OrderInterface
{
    public function create(Customer $customer);
    public function listAllOrders();


}
