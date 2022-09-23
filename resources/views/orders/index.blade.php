@extends('layouts.app')

@section('content')
<div class="row ">
    <div class="col">
        <div class="card mx-auto" style="width: 44rem;">
            <div class="card-header text-bg-secondary text-center">
                <img src="https://picsum.photos/150" class="mt-2 mx-auto rounded-3" width="75" height="75">
                <span class="h4  mt-0  fw-bolder"> EVERTEC - La Tiendita </span>
            </div>

            <div class="card-body">
                <x-new-order-button />

                @forelse ($orders as $order)
                    <x-order-card :order="$order" />
                @empty
                    <span> There is not orders registered.</span>
                @endforelse

            </div>
        </div>
    </div>
</div>

@endsection
