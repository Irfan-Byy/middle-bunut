<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
{
    $query = $request->input('q');

    $berita = \App\Models\Berita::query();

    if ($query) {
        $berita->where('judul', 'like', '%' . $query . '%')
               ->orWhere('isi', 'like', '%' . $query . '%');
    }

    $berita = $berita->latest()->get();

    return view('news', compact('berita'));
}

}

