@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
<div class="relative min-h-screen bg-white flex">
    <!-- Sidebar -->
    <aside class="w-[348px] min-h-screen bg-[#DCC6A0] flex flex-col items-center pt-8 relative">
        <!-- Logo -->
        <img
            src="{{ asset('images/logo.png') }}"
            alt="Logo"
            class="absolute left-[21px] top-[9px] w-[225px] h-[108px] object-contain"
        >
        <!-- Menu -->
        <div class="h-[140px]"></div> <!-- Spacer between logo and menu -->
        <nav class="flex flex-col gap-10 mt-4 w-full px-8">
            <div class="flex items-center gap-4">
                <span class="inline-flex w-10 h-10 bg-[#493628] rounded-full items-center justify-center">
                    <!-- Pencil Icon -->
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 17.25V21h3.75l11.06-11.06-3.75-3.75L3 17.25zM20.71 7.04a1.003 1.003 0 0 0 0-1.42l-2.34-2.34a1.003 1.003 0 0 0-1.42 0l-1.83 1.83 3.75 3.75 1.84-1.82z"/>
                    </svg>
                </span>
                <a href="{{ route('resep.create') }}" class="text-[#493628] font-medium text-lg hover:underline">Posting Resep</a>
            </div>
            <div class="flex items-center gap-4">
                <span class="inline-flex w-10 h-10 bg-[#493628] rounded-full items-center justify-center">
                    <!-- Bookmark Icon -->
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 4c-1.1 0-2 .9-2 2v16l8-5.33L20 22V6c0-1.1-.9-2-2-2H6z"/>
                    </svg>
                </span>
                <a href="{{ route('koleksi.index') }}" class="text-[#493628] font-medium text-lg hover:underline">Koleksi Resep</a>
            </div>
        </nav>
        <!-- Sidebar image (top right, decorative) -->
    </aside>
    <!-- Main Content -->
    <main class="flex-1 px-12 py-10 relative">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali ke Home
            </a>
            <div class="flex items-center gap-4 w-full">
                <div class="w-auto h-[69px] bg-[#493628] rounded-[10px] flex items-center px-8">
                    <h2 class="text-2xl text-white font-bold truncate">Kategori: {{ $kategori }}</h2>
                </div>
            </div>
        </div>
        <!-- Recipe Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                if (!isset($reseps)) {
                    $reseps = \App\Models\Resep::with('user')->where('kategori', $kategori)->get();
                }
            @endphp
            @forelse($reseps as $resep)
                <div class="relative group">
                    <div class="absolute inset-0 bg-black/20 rounded-[10px] pointer-events-none"></div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow relative">
                        @if ($resep->gambar)
                            <img src="{{ asset('storage/' . $resep->gambar) }}" class="w-full h-48 object-cover rounded-t-xl" alt="{{ $resep->nama }}">
                        @else
                            <img src="{{ asset('images/image.png') }}" class="w-full h-48 object-cover rounded-t-xl" alt="Default">
                        @endif
                        <div class="p-5">
                            <h4 class="font-bold text-lg text-yellow-900 mb-2 truncate">{{ $resep->nama }}</h4>
                            <p class="text-xs text-gray-500 mb-2 truncate">Oleh: {{ $resep->user->username ?? '-' }}</p>
                            <form action="{{ route('koleksi.simpan', ['id' => $resep->id_resep ?? $resep->id]) }}" method="POST" class="mt-3 flex gap-2">
                                @csrf
                                <a href="{{ route('resep.show', ['id' => $resep->id_resep ?? $resep->id]) }}" class="inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors text-sm">
                                    Lihat Detail
                                </a>
                                <button type="submit" class="inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors text-sm">
                                    Simpan
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Recipe name overlay (bottom left) -->
                    <span class="absolute left-4 bottom-4 text-white font-medium text-base drop-shadow-lg">{{ $resep->nama }}</span>
                </div>
            @empty
                <div class="col-span-3 text-center text-yellow-700 py-12 text-lg font-semibold">Belum ada resep di kategori ini.</div>
            @endforelse
        </div>
    </main>
</div>
@endsection
