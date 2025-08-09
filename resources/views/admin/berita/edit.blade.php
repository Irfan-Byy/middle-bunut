@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <h2 class="text-xl font-semibold mb-6">Edit Berita</h2>

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ $berita->judul }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div>
            <label for="isi" class="block text-sm font-medium text-gray-700">Isi</label>
            <textarea name="isi" id="isi" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ $berita->isi }}</textarea>
        </div>

        <div>
            <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar (biarkan kosong jika tidak ingin mengubah)</label>
            <input type="file" name="gambar" id="gambar" class="mt-1 block w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Perbarui</button>
    </form>
</div>
@endsection