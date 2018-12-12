<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Airline Forum</title>

    @yield('css')

    <!-- Scripts -->
    <script src="{{ asset('js/all.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body class="bg-default">
    <div id="app">
        <div class="main-content">
            <!-- Page content -->
            <div class="mt--10">
                    @yield('content')
            </div>

        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/component.js') }}"></script>
    @yield('js')
</body>
</html>
