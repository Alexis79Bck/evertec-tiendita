<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name')}}</title>


    <!-- Styles
    <link href="{{ asset('/css/normalize.css')}}" rel="stylesheet" />-->
    <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet" />

    <style>
        body {
            background-color: burlywood;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .btn-custom-style {
            margin-top: 10px;
        }


    </style>
</head>

<body class="antialiased">
    <div  class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  sm:pt-0">


        @include('layouts.menu-top')


        <div class="row  justify-content-center align-items-center shadow mb-4">

            @yield('page-title')

        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col">
                @if (Route::currentRouteName() != 'home')

                    @yield('form-content-step')

                @else

                    @yield('home-content')

                @endif
                <form id="regForm">
                    <h1 id="register">Donate</h1>


                    <div class="tab">
                        <p><input placeholder="First Name" oninput="this.className = ''" name="first"></p>
                        <p><input placeholder="Last Name" oninput="this.className = ''" name="last"></p>
                        <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
                        <p><input placeholder="Phone" oninput="this.className = ''" name="phone"></p>
                        <p><input placeholder="Street Address" oninput="this.className = ''" name="address"></p>
                        <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
                        <p><input placeholder="State" oninput="this.className = ''" name="state"></p>
                        <p><input placeholder="Country" oninput="this.className = ''" name="country"></p>

                    </div>
                    <div class="tab">
                        <p><input placeholder="Credit Card #" oninput="this.className = ''" name="email"></p>
                        <p>Exp Month
                            <select id="month">
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </p>
                        <p>Exp Year
                            <select id="year">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </p>

                        <p><input placeholder="CVV" oninput="this.className = ''" name="phone"></p>
                    </div>

                    <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png"
                            width="100" class="mb-4">
                        <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you
                            shortly!</span>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                    </div>
                </form>
            </div>
        </div>


    </div>


    <script src="{{ asset('js/jquery-3.6.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

    @yield('CustomsJS')

</body>

</html>
