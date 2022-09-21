<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name')}}</title>


    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" integrity="sha512-3PN6gfRNZEX4YFyz+sIyTF6pGlQiryJu9NlGhu9LrLMQ7eDjNgudQoFDK3WSNAayeIKc6B8WXXpo4a7HqxjKwg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        @yield('content')

    </div>


    <script src="{{ asset('js/jquery-3.6.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/js/all.min.js"
        integrity="sha512-ISfdo0dGmoT6xQiYhsCuBXNy982/TMgk9WnSeFiLoBVffcwXCWMyfYtmobfJuBvSQZVpjPvEJtGEPdTH9XKpvw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>

</html>
