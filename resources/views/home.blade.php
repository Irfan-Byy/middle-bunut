@extends('layouts.app')

@section('content')

<main class="max-w-7xl mx-auto px-4 pb-10">
    <img src="https://storage.googleapis.com/a1aa/image/8d3dc7bb-a9b4-43e7-627a-5ddd72579d59.jpg" alt="Village landscape" class="w-full rounded-lg mb-6 object-cover max-h-[300px]" />

    <!-- Berita Terbaru (Dinamis dari database) -->
<section class="mb-10">
    <h2 class="text-lg font-semibold mb-4">Berita Terbaru</h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($berita as $item)
            <div class="bg-white rounded-lg shadow p-4">
                @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="rounded-lg mb-3 h-[180px] object-cover w-full">
                @endif
                <h3 class="font-semibold text-lg mb-1">{{ $item->judul }}</h3>
                <p class="text-sm text-gray-600 line-clamp-3">{{ Str::limit($item->isi, 100) }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-6 text-center">
        <a href="{{ route('news.index') }}" class="text-blue-600 hover:underline">Lihat Semua Berita</a>
    </div>
</section>
    <!-- Event Terdekat -->
<section class="mt-12 px-4">
    <h2 class="text-xl font-bold mb-4">Event Terdekat</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($events as $event)
            <div class="bg-white p-4 rounded shadow">
                <div class="text-sm text-gray-500 mb-2">
                    {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}
                </div>
                <h3 class="font-semibold">{{ $event->judul }}</h3>
                <p class="text-sm text-gray-700">{{ Str::limit($event->deskripsi, 100) }}</p>
            </div>
        @endforeach
    </div>
</section>


</main>
@endsection
