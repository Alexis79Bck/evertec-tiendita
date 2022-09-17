<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Order;

class OrderController extends Controller
{
    public function newOrder()
    {
        return view('step-1');
    }

    public function detailOrder()
    {

        return view('step-2');
    }

    public function proceedOrder()
    {
        $customer = session('customer');

        $order = new Order;
        $order->status = 'CREATED';
        $order->customer_id = $customer[0]['id'];
        $order->save();
        
        dd($customer,$order->toArray());
        return view('step-3');
    }
}
