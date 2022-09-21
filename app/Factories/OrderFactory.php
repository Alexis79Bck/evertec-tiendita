<?php

namespace App\Factories;

use App\Models\Order;
use App\Models\Customer;

class OrderFactory
{

    public function newOrder(Customer $customer)
    {
        $order = new Order;
        $order->customer_id = $customer->id;
        $order->status = 'CREATED';
        $order->save();

        return $order;
    }

    public function listAllOrders()
    {
        $orders = Order::all();

        return $orders;
    }

}
