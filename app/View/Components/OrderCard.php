<?php

namespace App\View\Components;

use Illuminate\View\Component;


class OrderCard extends Component
{
    public $CustomerId;
    public $CustomerName;
    public $CustomerEmail;
    public $CustomerPhone;
    public $OrderId;
    public $OrderStatus;
    public $borderColor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->OrderId = $order->id;
        $this->OrderStatus = $order->status;
        $this->CustomerId = $order->customer->id;
        $this->CustomerName = $order->customer->name;
        $this->CustomerEmail = $order->customer->email;
        $this->CustomerPhone = $order->customer->mobile;
        switch ($order->status)
        {
            case 'PENDING':
                $this->borderColor = 'border-warning';
                break;
            case 'PAYED':
                $this->borderColor = 'border-success';
                break;
            case 'REJECTED':
                $this->borderColor = 'border-danger';
                break;
        }


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order-card');
    }
}
