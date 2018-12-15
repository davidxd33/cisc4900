<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CISC 4900 Project') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        @include('layouts.navbar')
        <div class="header-content">    
            <a href="#"><img src="{{ asset('img/logo.png') }}" alt=""></a>

            <p class="info">Enjoy food on a student's budget.</p>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>(C) 2018 All Rights Reserved  -- This is a website made by David Ponce for Brooklyn College's CISC 4900 course.</p>

    </footer>

    @yield('scripts')
</body>
</html>
