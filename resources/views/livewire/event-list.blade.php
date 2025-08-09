<div>
    <!-- Filter dan Search -->
    <div class="flex flex-wrap gap-3 mb-6">
        <input type="text" wire:model="search" placeholder="Cari acara..." class="py-2 px-3 rounded bg-gray-100 text-sm w-full max-w-sm">
        <select wire:model="kategori" class="py-2 px-3 rounded bg-gray-100 text-sm">
            <option value="">Semua Kategori</option>
            <option value="Pertemuan">Pertemuan</option>
            <option value="Festival">Festival</option>
            <option value="Olahraga">Olahraga</option>
        </select>
    </div>

    <!-- Daftar Event -->
    <div class="space-y-6">
        @foreach ($events as $event)
            <div class="border p-4 rounded flex flex-col sm:flex-row gap-4 items-start">
                <div class="flex-1">
                    <p class="font-bold text-lg">{{ $event->judul }}</p>
                    <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}</p>
                    <p class="mt-2 text-sm">{{ $event->deskripsi }}</p>
                </div>

                @if ($event->gambar)
                    <img src="{{ asset('storage/' . $event->gambar) }}" 
                         alt="{{ $event->judul }}" 
                         class="w-40 h-24 object-cover rounded-lg">
                @endif
            </div>
        @endforeach
    </div>
</div>
