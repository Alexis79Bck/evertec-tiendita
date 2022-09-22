<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OrderStatusMessage extends Component
{
    public $status;
    public $orderId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status, $id)
    {
        $this->status = $status;
        $this->orderId = $id;
    }

    public function classType()
    {

         switch ($this->status) {
            case 'PENDING':
                return 'warning';

            case 'PAYED':
                return 'success';

            case 'REJECTED':
                return 'danger';

         }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order-status-message');
    }
}
