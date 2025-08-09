<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Middle Bunut News</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    @livewireStyles
</head>
<body class="bg-[#F8EBDD] text-[#1E293B]">

    <!-- ✅ Navbar Umum -->
    <header class="bg-white shadow-sm">
        <div class="flex justify-between items-center px-4 py-4 max-w-7xl mx-auto">
            <!-- Kiri: Logo -->
            <div class="flex items-center gap-2">
                <i class="fas fa-book-open text-base"></i>
                <span class="font-semibold">Desa Bunut Tengah</span>
            </div>

            <!-- Tengah: Navigasi -->
            <nav class="hidden sm:flex gap-6 text-sm">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('news.index') }}" class="hover:underline">News</a>
                <a href="{{ route('events.index') }}" class="hover:underline">Events</a>
                <a href="{{ route('about') }}" class="hover:underline">About</a>
                <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
            </nav>

            <!-- Kanan: Icon -->
            <div class="flex items-center gap-3">
                <button class="p-2 rounded hover:bg-gray-200" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button>
                <button class="p-2 rounded hover:bg-gray-200" aria-label="Notifications">
                    <i class="fas fa-bell"></i>
                </button>
                @auth
                <a href="{{ route('admin.berita.index') }}">
                    <img src="https://storage.googleapis.com/a1aa/image/1e29b0b9-426e-4be2-04b8-0241c7b87347.jpg" 
                        alt="Admin Panel" class="w-8 h-8 object-cover rounded-full" />
                </a>
                @else
                <a href="{{ route('login') }}">
                    <img src="https://storage.googleapis.com/a1aa/image/1e29b0b9-426e-4be2-04b8-0241c7b87347.jpg" 
                        alt="Login" class="w-8 h-8 object-cover rounded-full" />
                </a>
                @endauth
            </div>
        </div>
    </header>

    <!-- ✅ Konten Halaman -->
    <main class="mt-6">
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>
