<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4 border-b">
                <h1 class="text-xl font-bold text-blue-600">Admin Desa</h1>
            </div>
            <nav class="p-4 space-y-2 text-sm">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-100">🏠 Dashboard</a>
                <a href="{{ route('admin.berita.index') }}" class="block px-4 py-2 rounded hover:bg-gray-100">📰 Berita</a>
                <a href="{{ route('admin.events.index') }}"  class="block px-4 py-2 rounded hover:bg-gray-100">📅 Events</a>
                <a href="{{ route('galeri.index') }}" class="block px-4 py-2 rounded hover:bg-gray-100">🖼️ Galeri</a>
                    <!-- Dropdown Pengaturan -->
                <div class="relative group">
                    <button class="flex items-center w-full px-4 py-2 rounded hover:bg-gray-100">
                        ⚙️ <span class="ml-2">Pengaturan</span>
                    </button>

                    <!-- Menu dropdown -->
                    <div class="absolute left-full top-0 mt-0 hidden group-hover:block bg-white border rounded shadow-md w-40 z-10">
                        <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">👤 Profil</a>

                        <!-- Logout -->
                        <a href="#" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block px-4 py-2 text-red-600 hover:bg-gray-100">
                            🚪 Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <div class="mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">@yield('title')</h2>
                <p class="text-sm text-gray-500">@yield('subtitle')</p>
            </div>

            @yield('content')
        </main>

    </div>

</body>
</html>
