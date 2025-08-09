<?php

namespace App\Http\Controllers;

use App\Models\Berita; // atau Galeri kalau tabelnya khusus galeri

class GaleriController extends Controller
{
    public function index()
    {
        // Misal gambar disimpan di tabel `berita`
        $galeri = Berita::whereNotNull('gambar')->get();

        return view('admin.galeri.index', compact('galeri'));
    }
}

