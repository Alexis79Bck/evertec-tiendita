<div class="d-flex mb-3 pl-2 border border-dark  border-top-0 rounded-3 border-opacity-50 shadow">
    <div class="container border-top {{ $borderColor }} border-4 rounded-3">
        <div class="row p-0 g-2  ">
            <span class="h4 text-dark">
                Order # {{ $OrderId }}
                <a href="#orderMessage-{{$OrderId}}" role="button" class="btn btn-sm btn-link " data-bs-toggle="collapse" aria-expanded="false" aria-controls="orderMessage">
                    Status <span><i class="fas fa-info-circle"></i></span>
                </a>
            </span>
            <div class="collapse" id="orderMessage-{{$OrderId}}"">
                <x-order-status-message :status="$OrderStatus" :id="$OrderId" />
            </div>
        </div>
        <div class="row p-0 g-2">
            <span class="text-dark">
                Customer Name: {{ $CustomerName }}   <br>
                Customer Email: {{ $CustomerEmail }} <br>
                Customer Phone: {{ $CustomerPhone }} <br>
            </span>
        </div>
    </div>
</div>
