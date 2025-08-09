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
    <div class="bg-white rounded-lg shadow p-4">
        @if ($item->gambar)
            <img 
                src="{{ asset('storage/' . $item->gambar) }}" 
                alt="{{ $item->judul }}" 
                class="rounded-lg mb-3 h-[180px] object-cover w-full cursor-pointer"
                data-bs-toggle="modal"
                data-bs-target="#modal{{ $item->id }}"
            >
        @endif
        <h3 class="font-semibold text-lg mb-1">{{ $item->judul }}</h3>
        <p class="text-sm text-gray-600 line-clamp-3">{{ Str::limit($item->isi, 100) }}</p>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal{{ $item->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $item->judul }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid mb-3">
                    @endif
                    <p>{{ $item->isi }}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach

</section>

</div>


</main>
@endsection
