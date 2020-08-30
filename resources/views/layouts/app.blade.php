<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Devis Olivia') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.1/Sortable.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type='text/css'>
</head>
<body>
    <div id="app" id="wrapper">
        <main>
            @include('flash')
            @auth
            <!-- Sidebar -->
            @include('layouts.partials.sidebar')
            @endauth
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    @include('layouts.partials.scripts')
</body>
</html>
