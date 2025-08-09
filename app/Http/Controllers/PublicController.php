<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Event;

class PublicController extends Controller
{
    public function home()
    {
    $berita = Berita::latest()->take(3)->get(); // Ambil 3 berita terbaru
    $events = Event::whereDate('tanggal', '>=', now())->orderBy('tanggal')->take(3)->get(); // Ambil 3 event terdekat
    return view('home', compact('berita', 'events'));
    }

    public function news()
    {
    $berita = \App\Models\Berita::latest()->paginate(9);
    return view('news', compact('berita'));
    }


    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}

