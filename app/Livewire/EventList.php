<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class EventList extends Component
{
    public $search = '';
    public $kategori = '';

    public function render()
    {
        $query = Event::query();

        if ($this->search) {
            $query->where('judul', 'like', '%' . $this->search . '%')
                  ->orWhere('deskripsi', 'like', '%' . $this->search . '%');
        }

        if ($this->kategori) {
            $query->where('kategori', $this->kategori);
        }

        $events = $query->orderBy('tanggal', 'asc')->get();

        return view('livewire.event-list', compact('events'));
    }
}
