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

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8EBDD] font-sans text-gray-900 antialiased">

    <div class="min-h-screen flex">
        <!-- Kiri: Gambar -->
        <div class="w-1/2 hidden md:block">
            <img src="{{ asset('images/pemandangan.jpg') }}" alt="Login Image" class="w-full h-full object-cover">
        </div>

        <!-- Kanan: Form -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                {{ $slot }} <!-- Ini tempat form login muncul -->
            </div>
        </div>
    </div>

</body>
</html>
