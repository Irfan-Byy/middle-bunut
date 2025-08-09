@extends('layouts.admin')

@section('title', 'Daftar Berita')
@section('subtitle', 'Kelola semua berita yang telah dipublikasikan')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.berita.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
            + Tambah Berita
        </a>
    </div>

    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Judul</th>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Penulis</th>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Tanggal</th>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Status</th>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @foreach ($berita as $item)
                    <tr>
                        <td class="px-6 py-3">{{ $item->judul }}</td>
                        <td class="px-6 py-3">{{ $item->penulis ?? 'Admin' }}</td>
                        <td class="px-6 py-3">{{ $item->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-3">
                            <span class="inline-block px-2 py-1 text-xs rounded-full {{ $item->status == 'Published' ? 'bg-green-100 text-green-600' : 'bg-gray-100 text-gray-600' }}">
                                {{ $item->status }}
                            </span>
                        </td>
                        <td class="px-6 py-3 space-x-2">
                            <a href="{{ route('admin.berita.edit', $item->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
