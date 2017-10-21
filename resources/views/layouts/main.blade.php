<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{asset('libraries/bootstrap/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/styles.min.css')}}" />
        <link rel="stylesheet" href="{{asset('libraries/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" />
    </head>
    <body>
        <header>
            @include('layouts.partials.top-nav')
        </header>
        <div class="container">
            @yield('content')
        </div>

        <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
        <script src="{{asset('libraries/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('libraries/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('libraries/moment.js')}}"></script>
        <script src="{{asset('libraries/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&libraries=places" defer></script>

        @stack('scripts')
    </body>
</html>
