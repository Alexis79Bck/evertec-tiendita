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

    public static function listAllOrders()
    {
        $orders = Order::paginate(25);

        return $orders;
    }

    public static function getOrder($id)
    {
        return Order::find($id);
    }

    public static function selectStatus(string $status)
    {
        switch ($status) {
            case 'APPROVED':
                return 'PAYED';
            case 'PENDING':
                return 'PENDING';
            case 'REJECTED':
                return 'REJECTED';
            default:
                return 'CREATED';

        }
    }

    public static function searchOrdersByCostumerName(string $name)
    {

    }

    public static function searchOrderById(int $id)
    {

    }

}
