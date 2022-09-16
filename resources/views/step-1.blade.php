<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: Verdana, Geneva, Tahoma, sans-serif sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       
        <!-- CONTAINER -->
        <div class="container d-flex align-items-center min-vh-100">
            <div class="row g-0 justify-content-center">
                <!-- TITLE -->
                <div class="col-lg-4 offset-lg-1 mx-0 px-0">
                    <div id="title-container">
                        
                        <h2>--- Order Request ---</h2>
                       
                    </div>
                </div>
                <!-- FORMS -->
                <div class="col-lg-7 mx-0 px-0">
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50"
                            class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 0%">
                        </div>
                    </div>
                    <div id="qbox-container">
                        <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate>
                            <!-- STEPS HERE -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
       

        <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
