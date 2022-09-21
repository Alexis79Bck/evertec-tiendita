<?php

namespace App\Interfaces;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

interface CustomerInterface
{
    public function newCustomer(Request $request);

}
