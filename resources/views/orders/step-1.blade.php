@extends('layouts.app')


@section('content')
<div class="d-flex justify-content-center display-6 text-primary mt-0 g-0 bg-light fw-bolder">
    NEW ORDER
</div>
<div class="row ">
    <div class="col">

        <div class="card mt-2 mx-auto vh-100 w-75">
            <form id="stepForm" action="{{ route('accept') }}" method="POST">
            @csrf
                <div class="card-header text-secondary text-center">
                <span class="h3  fw-bolder"> Customer Info </span>
                </div>
                <div class="card-body">

                        <div class="mb-3 form-group">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}"placeholder="Type name here...">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Type email here...">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-group">
                            <label for="mobile" class="form-label">Mobile Phone</label>
                            <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" id="mobile" value="{{ old('mobile') }}" placeholder="Type mobile here...">
                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                </div>

                <div class="card-footer ">
                    <a href="{{ route('orders') }}" class="mb-3 btn btn-secondary float-start" role="button"> Cancel </a>
                    <button class="mb-3 btn btn-success float-end" role="submit"> Accept  </button>

                </div>
            </form>
        </div>
    </div>

    <div class="col">

        <div class="card mx-auto mt-2 vh-100 w-75" >

            <div class="card-header text-bg-secondary text-center">
                <span class="h3  mt-0  fw-bolder"> Product Detail </span>
            </div>
            <div class="card-body">


                <div class="container text-center">

                    <div class="row w-100">
                        <div class="col">
                            <img src="{{$imageURL}}" class="img-fluid border border-dark rounded-2">
                            <p class="display-5  text-center fw-bolder shadow"> cost $125 </p>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
</div>
@endsection





