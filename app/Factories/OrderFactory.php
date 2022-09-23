<?php

namespace App\Factories;

use App\Models\Order;
use App\Models\Customer;

class OrderFactory
{

    /**
     * Método newOrder
     * @param Customer $customer
     * @return Order
     *
     * Crea una nueva orden de Compra y devuelve el modelo creado.
     */
    public function newOrder(Customer $customer)
    {
        $order = new Order;
        $order->customer_id = $customer->id;
        $order->status = 'CREATED';
        $order->save();

        return $order;
    }
    /**
     * Método listAllOrders
     * @return mixed
     *
     * Lista todas las ordenes registradas en la BD.
     */
    public static function listAllOrders()
    {
        $orders = Order::paginate(25);

        return $orders;
    }
    /**
     * Método getOrder
     * @param mixed $id
     * @return mixed
     *
     * Obtiene la orden especificada en el $id.
     */
    public static function getOrder($id)
    {
        return Order::find($id);
    }
    /**
     * Método selectStatus
     * @param string $status
     * @return string
     *
     * Devuelve el valor seleccionado de acuerdo al status recibido por $status
     * $status viene como resultado de $requestInfo['status']['status'] en OrderController
     */
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

}
