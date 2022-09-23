@extends('layouts.app')

@section('content')
<div class="row ">
    <div class="col">

        <div class="card mx-auto mt-2 w-75 ">

                <div class="card-header text-secondary text-center">
                    <span class="h3  mt-0  fw-bolder shadow"> ORDER #{{ $order->id }} - <b class="{{ $order->status == 'PAYED' ? 'text-success' : '' }} {{ $order->status == 'PENDING' ? 'text-warning' : '' }} {{ $order->status == 'REJECTED' ? 'text-danger' : '' }} "> {{ $order->status }} </b> </span>
                    <p class="w-50 mx-auto justify-content-center alert {{ $order->status == 'PAYED' ? 'alert-success' : '' }} {{ $order->status == 'PENDING' ? 'alert-warning' : '' }} {{ $order->status == 'REJECTED' ? 'alert-danger' : '' }} bg-opacity-50 d-flex align-items-center"><small class="fs-6 font-monospace">{{ $message }}</small></p>
                </div>
                <div class="card-body">

                    <div class="container-fluid border-start border-info border-3">
                        <div class="row ">
                            <div class="mb-3 col">
                                <p> Puchase Date: {{ date('Y-m-d', strtotime($order->created_at)) }} </p>
                                <p> Customer Name: {{ $order->customer->name }} </p>
                                <p> Customer Email: {{ $order->customer->email }} </p>
                                <p> Customer Mobile: {{ $order->customer->mobile }} </p>
                                <p> Product:  <img src="{{$imageURL}}" class="img-thumbnail border border-dark rounded-2" height="125" width="125"></p>
                                <p> Cost: $125 </p>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    @if ($order->status == 'PAYED')
                        <x-finish-button />
                    @else
                        <x-retry-button :orderId="$order->id"/>
                    @endif
                </div>



        </div>
    </div>
</div>

@endsection
