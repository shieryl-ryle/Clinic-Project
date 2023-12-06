<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center lg:items-end lg:pr-20 pt-6 sm:pt-0" style="background-image: url('{{ asset('image/bgimage.png') }}'); background-size: cover; background-position: center;">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div>
                    <a href="/" wire:navigate>
                        <img src="{{ asset('image/logo.png') }}" alt="PLM Logo" class="w-64">
                    </a>
                    <h1 class="text-3xl font-semibold text-primary mt-3">Clinic Portal</h1>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
