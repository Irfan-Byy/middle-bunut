@extends('layouts.admin')

@section('title', 'Edit Event')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-semibold mb-6">Edit Event</h2>

        <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 font-medium text-gray-700">Judul</label>
                <input type="text" name="judul" value="{{ old('judul', $event->judul) }}" required class="w-full border-gray-300 rounded px-4 py-2 shadow-sm focus:ring focus:ring-blue-200">
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" value="{{ old('tanggal', $event->tanggal) }}" required class="w-full border-gray-300 rounded px-4 py-2 shadow-sm focus:ring focus:ring-blue-200">
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Kategori</label>
                <select name="kategori" required class="w-full border-gray-300 rounded px-4 py-2 shadow-sm focus:ring focus:ring-blue-200">
                    <option value="Festival" @selected($event->kategori == 'Festival')>Festival</option>
                    <option value="Pertemuan" @selected($event->kategori == 'Pertemuan')>Pertemuan</option>
                    <option value="Olahraga" @selected($event->kategori == 'Olahraga')>Olahraga</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" rows="5" class="w-full border-gray-300 rounded px-4 py-2 shadow-sm focus:ring focus:ring-blue-200">{{ old('deskripsi', $event->deskripsi) }}</textarea>
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Gambar Saat Ini</label>
                @if($event->gambar)
                    <img src="{{ asset('storage/' . $event->gambar) }}" alt="Gambar Event" class="w-32 h-20 object-cover rounded mb-3">
                @else
                    <p class="text-gray-500 italic">Belum ada gambar.</p>
                @endif

                <label class="block mb-1 font-medium text-gray-700">Ganti Gambar (Opsional)</label>
                <input type="file" name="gambar" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded shadow">
                    Simpan Perubahan
                </button>
                <a href="{{ route('admin.events.index') }}" class="ml-4 text-gray-600 hover:text-gray-800 underline">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
