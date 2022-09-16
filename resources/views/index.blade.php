@extends('layouts.app')

@section('form-title')
    <span class="h3  mt-0  fw-bolder"> EVERTEC - La Tiendita </span>
@endsection

@section('home-content')
    <div class="card mx-auto" style="width: 28rem;">
        <div class="card-header text-bg-secondary text-center">
            @yield('form-title')
        </div>
        <img src="https://picsum.photos/150" class="mt-2 mx-auto rounded-3" width="150" height="150">
        <div class="card-body">
            <h4 class="card-title fs-3 text-center">Reto Técnico para Desarrollador Laravel </h4>

        </div>
    </div>

@endsection
