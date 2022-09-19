@extends('layouts.app')


@section('page-title')
    <span class="display-6 text-primary mt-0 g-0 text-center bg-light fw-bolder">
       ORDER REQUEST
    </span>
@endsection


@section('form-content-step')
    <div class="card mx-auto" style="width: 28rem;">
        <form id="stepForm" action="{{ route('register') }}" method="POST">
        @csrf
            <div class="card-header text-bg-secondary text-center">
               <span class="h3  mt-0  fw-bolder"> Step 1 </span>
            </div>
            <div class="card-body">

                    <h3 class="text-center">Customer Info</h3>

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

                <button class="mb-3 btn btn-primary float-end" role="submit"> Next  </button>

            </div>
        </form>
    </div>

@endsection


@section('CustomsJS')

@endsection




