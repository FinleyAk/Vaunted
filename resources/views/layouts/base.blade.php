<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') // Vaunted</title>
        @yield('css')
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/extra.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/prettify/lang-css.js') }}"></script>
        <script src="{{ asset('js/prettify/prettify.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/prettify/prettify.js') }}">
        <link rel="stylesheet" href="{{ asset('css/prettify/lang-css.js') }}">

        @yield('js')
    </head>
    <body>
        @yield('content')
    </body>
</html>
<style>
    body{
        background-color: #2C2F33;
    }
    .btn{
        text-transform: capitalize;
    }

</style>
