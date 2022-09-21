<nav class="navbar navbar-expand-lg text-bg-primary shadow-lg">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item ">
                    <a class="nav-link text-link  fw-bold {{ Route::currentRouteName() == 'home' ? 'text-primary bg-light' : 'text-light'}}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link text-link  fw-bold {{ Route::currentRouteName() == 'orders' ? 'text-primary bg-light' : 'text-light'}}" aria-current="page"href="{{ route('orders') }}">Orders </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
