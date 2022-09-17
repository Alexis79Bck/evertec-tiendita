@extends('layouts.app')

@section('page-title')
<span class="display-6 text-primary mt-0 g-0 text-center bg-light fw-bolder">
    ORDER REQUEST
</span>
@endsection

@section('form-content-step')
<div class="card mx-auto" style="width: 28rem;">

    <div class="card-header text-bg-secondary text-center">
        <span class="h3  mt-0  fw-bolder"> Step 3 </span>
    </div>
    <div class="card-body">
        <div class="tab">
            <h3 class="text-center">Processing Order.... </h3>

            <div class="container text-center">
                <div class="row border-start border-info border-3 w-100">
                    <div class="mb-3 col">
                        <span class="h5  text-center "> The order is currently being processed. </span>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col">
                        <div class="spinner-border text-primary" style="width: 5.5rem; height: 5.5rem;" role="status">
                            <span >Loading...</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    
</div>

@endsection
