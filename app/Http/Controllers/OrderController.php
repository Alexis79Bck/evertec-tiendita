<?php

namespace App\Http\Controllers;

use App\Services\ApiPtPServices;
use Illuminate\Http\Request;
use App\Factories\OrderFactory;
use App\Factories\CustomerFactory;


class OrderController extends Controller
{
    /**
     * Método index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     *
     * Devuelve la vista (view.index) el cual mostrará el listado de todas las órdenes.
     */
    public function index()
    {
        $orders = OrderFactory::listAllOrders();
        return view('orders.index', compact('orders'));
    }
    /**
     * Método create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     *
     * Devuelve la vista (order.step-1) el cual mostrará el formulario para la
     * captura de la información del Costumer y visualiza el detalle del producto.
     */
    public function create()
    {
        $imageURL = $this->getImageURL();
        return view('orders.step-1', compact('imageURL'));
    }
    /**
     *  Método accept
     * @param Request $request
     * @return mixed
     *
     * Método el cual se inicia el proceso de orden y envia la solicitud
     * al ApiPtPServices el cual representa la pasarela de pago PlaceToPay
     */
    public function accept(Request $request)
    {

        $customer = (new CustomerFactory)->saveCustomer($request);
        $order = (new OrderFactory)->newOrder($customer);
        $request->request->add(['status' => 'CREATED', 'product' => 'Product X', 'cost' => 125, 'orderId' => $order->id]);
        $response = ApiPtPServices::createApiRequest($request);
        //dd($response);
        if ($response['status']['status'] == 'OK') {
            $order->requestId = $response['requestId'];
            $order->processURL = $response['processUrl'];
            $order->save();
            return redirect()->away($response['processUrl']);
        } else {
            return $response['status']['message'];
        }
    }
    /**
     *  Método processed
     * @param mixed $orderId
     * @return \Illuminate\Http\Response
     *
     * Método el cual la orden procesada retorna su información y redirige
     * a una vista(orders.step-2)
     */
    public function processed($orderId)
    {
        $order = OrderFactory::getOrder($orderId);
        $requestInfo = ApiPtPServices::getRequestInfo($order->requestId);
        $message = $requestInfo['status']['message'];
        $order->status = OrderFactory::selectStatus($requestInfo['status']['status']);
        $order->save();
        $imageURL = $this->getImageURL();
        return response()->view('orders.step-2', compact('order','imageURL','message'));

    }

    /**
     * Método getImageURL
     * @return string
     *
     * Método el cual devuelve una imagen aleatoria del sitio https://lorem.space
     */
    private function getImageURL()
    {
        return 'https://api.lorem.space/image/' . $this->getCategory() . '?w=200&h=200';
    }
    /**
     * Método getCategory
     * @return string
     *
     * Método el cual devuelve una categoria para usarla en el método getImageURL()
     */
    private function getCategory()
    {
        $category = ['shoes', 'watch', 'book', 'burger'];
        $productImg = array_rand($category, 1);

        return $category[$productImg];
    }
}
