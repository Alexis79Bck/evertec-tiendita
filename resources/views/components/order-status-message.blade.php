
<div class="alert alert-{{ $classType() }} bg-opacity-50 d-flex align-items-center" role="alert">

        <span class="col w-75">Status: {{ $status }}</span>


        <a href="{{ route('processed', $orderId) }}" class=" float-end mb-3 btn btn-outline-{{ $classType() }} {{ $status == 'PENDING' ? 'text-dark ' : '' }} btn-block " role="button"><i class="fa fa-eye"></i> View </a>


</div>

