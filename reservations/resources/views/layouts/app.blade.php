<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Projet réservations - @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!--CDN alpine JS-->
        <!--<!script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></!script>-->
        <!--CDN Leaflet -->
            
            <!--Only required for location/show page-->
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin=""/>
            <!-- Scripts -->
            <!-- Make sure you put this AFTER Leaflet's CSS -->
            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
            <script src="{{ asset('js/leaflet.js') }}" defer></script>

        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!--Jquery or other cdn and script files-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="container mx-auto px-4">
                    <!-- Navbar -->
                    @include('partials.navbar')    
                    {{ $header }}
                </div>  
            </header>

            <!-- Page Content -->
            <main class="p-5">
                {{ $slot }}
            </main>
        </div>
        @include('partials.footer')    
    </body>
</html>
