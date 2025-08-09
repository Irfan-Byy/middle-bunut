@extends('layouts.app')

@section('content')
<main class="max-w-4xl mx-auto px-6 py-8">
    <h1 class="text-lg font-semibold text-[#0F172A] mb-4">
        About Middle Bunut Village
    </h1>
    <p class="text-xs text-[#475569] mb-8 leading-relaxed">
        Middle Bunut is a vibrant village with a rich history and a strong sense of community...
    </p>

    <section class="mb-8">
        <h2 class="text-sm font-semibold text-[#0F172A] mb-4">History</h2>
        <ul class="space-y-4 text-xs text-[#475569]">
            <li class="flex space-x-2">
                <div class="flex flex-col items-center text-[#94A3B8]">
                    <i class="fas fa-history text-[10px]"></i>
                </div>
                <div>
                    <h3 class="text-[10px] font-semibold mb-0.5">Founding of Middle Bunut</h3>
                    <p class="text-[10px]">1850</p>
                </div>
            </li>
            <!-- Tambahkan sejarah lainnya di sini -->
        </ul>
    </section>

    <section>
        <h2 class="text-sm font-semibold text-[#0F172A] mb-4">Culture</h2>
        <p class="text-xs text-[#475569] leading-relaxed">
            Middle Bunut is renowned for its unique cultural heritage...
        </p>
    </section>
</main>
@endsection
