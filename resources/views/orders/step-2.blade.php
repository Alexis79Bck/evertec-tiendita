@extends('layouts.app')

@section('content')
<div class="row ">
    <div class="col">

        <div class="card mx-auto mt-2 w-75 ">

                <div class="card-header text-secondary text-center">
                    <span class="h3  mt-0  fw-bolder"> ORDER #{{ $order->id }} - {{ $order->status }} </span>
                </div>
                <div class="card-body">

                    <div class="container-fluid border-start border-info border-3">
                        <div class="row ">
                            <div class="mb-3 col">
                                <p> Puchase Date: {{ date('Y-m-d', strtotime($order->created_at)) }} </p>
                                <p> Customer Name: {{ $customer->name }} </p>
                                <p> Customer Email: {{ $customer->email }} </p>
                                <p> Customer Mobile: {{ $customer->mobile }} </p>
                                <p> Product:  <img src="{{$imageURL}}" class="img-thumbnail border border-dark rounded-2" height="125" width="125"></p>
                                <p> Cost: $125 </p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="card-footer ">
                    <a href="{{ route('orders') }}" class="mb-3 btn btn-secondary float-start" role="button"> Cancel </a>
                    <a href="{{ route('proceed') }}" class="mb-3 btn btn-success float-end" role="button"> Proceed </a>

                </div>

        </div>
    </div>
</div>

@endsection
