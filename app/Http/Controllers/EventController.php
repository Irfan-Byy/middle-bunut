<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function publicIndex()
    {
        $events = Event::latest()->paginate(6); // ambil dari database
        return view('events', compact('events')); // arahkan ke resources/views/events.blade.php
    }
}
