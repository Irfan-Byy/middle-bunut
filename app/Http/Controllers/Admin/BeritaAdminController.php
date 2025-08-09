<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaAdminController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('admin.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'isi' => 'required|string',
        'gambar' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('gambar')) {
        $validated['gambar'] = $request->file('gambar')->store('uploads', 'public');
    }

    Berita::create($validated);

    return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
{
    $berita = Berita::findOrFail($id);
    return view('admin.berita.edit', compact('berita'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'isi' => 'required|string',
        'gambar' => 'nullable|image|max:2048',
    ]);

    $berita = Berita::findOrFail($id);

    if ($request->hasFile('gambar')) {
        $validated['gambar'] = $request->file('gambar')->store('uploads', 'public');
    }

    $berita->update($validated);

    return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
{
    $berita = Berita::findOrFail($id);

    if ($berita->gambar) {
        Storage::disk('public')->delete($berita->gambar);
    }

    $berita->delete();

    return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
}
}
