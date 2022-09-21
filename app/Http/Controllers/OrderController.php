<?php

namespace App\Http\Controllers;

use App\Services\ApiPtPServices;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use App\Models\Order;
use App\Models\Customer;
use App\Factories\OrderFactory;
use App\Factories\CustomerFactory;
class OrderController extends Controller
{

    public function index()
    {
        $orders = (new OrderFactory)->listAllOrders();
        return view('orders.index', compact('orders'));
    }
    public function create()
    {
        $imageURL = $this->getImageURL();
        return view('orders.step-1', compact('imageURL'));
    }

    public function accept(Request $request)
    {
        $customer = (new CustomerFactory)->saveCustomer($request);
        $order = (new OrderFactory)->newOrder($customer);
        $imageURL = $this->getImageURL();

        //return view('orders.step-2', compact('customer','order','imageURL'));
        return response()->redirectToRoute('detail')->with('customer',$customer)->with('order',$order)->with('imageURL', $imageURL);
    }
    public function detail(Request $request)
    {
        dd($request);
        return view('orders.step-2', compact('customer', 'order', 'imageURL'));
    }

    public function proceed(Request $request)
    {
        dd($request);
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
