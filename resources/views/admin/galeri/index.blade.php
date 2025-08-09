@extends('layouts.admin')

@section('content')
<h1>Semua Gambar Berita</h1>

<div class="grid grid-cols-4 gap-4">
    @foreach($galeri as $item)
        <div class="border rounded shadow p-2">
            <img src="{{ asset('storage/' . $item->gambar) }}" 
                 alt="{{ $item->judul }}" 
                 class="w-full h-48 object-cover">
            <p class="mt-2 font-semibold">{{ $item->judul }}</p>
        </div>
    @endforeach
</div>
@endsection
