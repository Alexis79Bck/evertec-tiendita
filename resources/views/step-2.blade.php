@extends('layouts.app')

@section('page-title')
<span class="display-6 text-primary mt-0 g-0 text-center bg-light fw-bolder">
    ORDER REQUEST
</span>
@endsection

@section('form-content-step')
    <div class="card mx-auto" style="width: 28rem;">

            <div class="card-header text-bg-secondary text-center">
                <span class="h3  mt-0  fw-bolder"> Step 2 </span>
            </div>
            <div class="card-body">
                <div class="tab">
                    <h3 class="text-center">Order Detail</h3>

                    <div class="container text-center">
                        <div class="row border-start border-info border-3 w-100">
                            <div class="mb-3 col">
                                <span class="h5  text-center "> The order for the purchase of the product is <b class="text-warning">open</b>. </span>
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col">
                                <span class="display-4  text-center fw-bolder shadow"> Product X <br> $125 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer ">

                <a href="{{ route('step-3') }}" class="mb-3 btn btn-success float-end" role="button"> Proceed </a>

            </div>

    </div>

@endsection
