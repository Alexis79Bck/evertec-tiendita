<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OrderStatusMessage extends Component
{
    public $status;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    public function classType()
    {
        
         switch ($this->status) {
            case 'CREATED':
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
