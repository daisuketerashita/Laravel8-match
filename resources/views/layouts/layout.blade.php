<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jTinder.css') }}">
</head>
<body>

    @yield('content')

    <!-- Scripts -->
    <!-- transform2d lib -->
    <script type="text/javascript" src="{{ asset('js/jquery.transform2d.js') }}"></script>
    <!-- jTinder lib -->
    <script type="text/javascript" src="{{ asset('js/jquery.jTinder.js') }}"></script>
    <!-- jTinder initialization script -->
    <script>$("#tinderslide").jTinder();</script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
