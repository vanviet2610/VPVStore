<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')


    <link rel="stylesheet" href="{{ asset('clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/blue.css') }}">

    @stack('css')
    <link rel="stylesheet" href="{{ asset('clients/css/font-awesome.css') }}">

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800"
        rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body>
    @include('layout.clients.layout.header')

    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <!-- /.container -->
    </div>

    @include('layout.clients.layout.footer')


    <script src="{{ asset('clients/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('clients/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('clients/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('clients/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('clients/js/echo.min.js') }}"></script>
    
    @stack('scripts')
    <script src="{{ asset('clients/js/jquery.rateit.min.js') }}"></script>
    <script src="{{ asset('clients/js/scripts.js') }}"></script>
</body>

</html>
