@extends('layouts.app')

@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-16 bg-[#f8fafc]">
    <h1 class="text-2xl font-semibold mb-4 select-none">News</h1>

    <!-- Search input -->
    <form method="GET" action="{{ route('news.index') }}" class="mb-6 max-w-3xl">
    <label class="sr-only" for="search">Search articles</label>
    <div class="relative">
        <input
            type="search"
            name="q"
            id="search"
            class="w-full rounded-lg bg-[#e2e8f0] placeholder:text-[#64748b] placeholder:text-sm pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3b82f6] focus:bg-white"
            placeholder="Search for articles"
            value="{{ request('q') }}"
        />
        <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none text-[#64748b]">
            <i class="fas fa-search"></i>
        </div>
    </div>
</form>


    <!-- Tabs -->
    <nav class="flex space-x-8 border-b border-gray-300 mb-8 text-sm font-medium select-none">
        <button class="border-b-2 border-[#e2e8f0] text-[#111827] font-semibold pb-2">Local Events</button>
        <button class="text-[#3b82f6] pb-2 border-b-2 border-transparent hover:border-[#cbd5e1]">Community Development</button>
        <button class="text-[#3b82f6] pb-2 border-b-2 border-transparent hover:border-[#cbd5e1]">Village History</button>
    </nav>

    
    <section aria-label="News articles" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl">
    @foreach ($berita as $item)
        <article class="flex flex-col space-y-3">
            @if($item->gambar)
                <img 
                    src="{{ asset('storage/' . $item->gambar) }}" 
                    alt="{{ $item->judul }}" 
                    class="rounded-lg object-cover w-full h-[180px]" 
                    height="180"
                />
            @endif
            <div class="flex flex-col space-y-1">
                <h2 class="text-sm font-normal leading-tight">
                    {{ $item->judul }}
                </h2>
                <p class="text-xs text-[#475569] leading-snug">
                    {{ Str::limit(strip_tags($item->isi), 150) }}
                </p>
            </div>
        </article>
    @endforeach
</section>

</div>


</main>
@endsection
