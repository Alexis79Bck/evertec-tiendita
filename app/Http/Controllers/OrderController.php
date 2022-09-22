<?php

namespace App\Http\Controllers;

use App\Services\ApiPtPServices;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use App\Factories\OrderFactory;
use App\Factories\CustomerFactory;



class OrderController extends Controller
{

    public function index()
    {
        $orders = OrderFactory::listAllOrders();
        return view('orders.index', compact('orders'));
    }
    public function create()
    {
        $imageURL = $this->getImageURL();
        return view('orders.step-1', compact('imageURL'));
    }

    public function show($id)
    {
        $imageURL = $this->getImageURL();
        return view('orders.step-1', compact('imageURL'));
    }

    public function accept(Request $request)
    {
        $customer = (new CustomerFactory)->saveCustomer($request);
        $order = (new OrderFactory)->newOrder($customer);
        $request->request->add(['status' => 'CREATED', 'product' => 'Product X', 'cost' => 125, 'orderId' => $order->id]);
        $imageURL = $this->getImageURL();
        $response = ApiPtPServices::createApiRequest($request);
        if ($response['status']['status'] == 'OK') {
            $order->requestId = $response['requestId'];
            $order->processURL = $response['processUrl'];
            $order->save();
            return redirect()->away($response['processUrl']);
        } else {
            return $response['status']['message'];
        }
    }


    public function processed($orderId)
    {
        $order = OrderFactory::getOrder($orderId);
        $requestInfo = ApiPtPServices::getRequestInfo($order->requestId);
        $message = $requestInfo['status']['message'];
        dd($requestInfo, $message);
        $order->status = OrderFactory::selectStatus($requestInfo['status']['status']);
        $order->save();
        $imageURL = $this->getImageURL();
        return response()->view('orders.step-2', compact('order','imageURL','message'));
        // dd($order, $requestInfo, 'Info del Customer: ' . $order->customer->name);
    }

    private function getImageURL()
    {
        return 'https://api.lorem.space/image/' . $this->getCategory() . '?w=200&h=200';
    }

    private function getCategory()
    {
        $category = ['shoes', 'watch', 'book', 'burger'];
        $productImg = array_rand($category, 1);

        return $category[$productImg];
    }
}
