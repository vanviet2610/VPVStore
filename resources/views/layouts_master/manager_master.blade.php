<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App css -->
    <link href="{{ asset('manager/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{ asset('manager/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('manager/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    @stack('css')

</head>

<body>
    <div class="" id="wrapper">
        {{-- ---------------- Header --------------------------------- --}}
        @include('layout.manager.master_dashboard.header')
        {{-- ---------------- SideBar --------------------------------- --}}
        @include('layout.manager.master_dashboard.sidebar')
        {{-- ---------------- Content --------------------------------- --}}
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>
        </div>


        {{-- ---------------- Footer --------------------------------- --}}
        @include('layout.manager.master_dashboard.footer')
    </div>

    <script src="{{ asset('manager/js/vendor.min.js') }}"></script>
    <script src="{{ asset('manager/js/app.min.js') }}"></script>
    @stack('js')
</body>

</html>
