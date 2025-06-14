@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
<div class="max-w-5xl mx-auto mt-10 px-2">
    <!-- Tombol Kembali -->
    <a href="{{ route('home') }}" class="inline-flex items-center mb-6 px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-700 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Kembali ke Home
    </a>
    <h2 class="text-2xl font-bold text-yellow-900 mb-6">Koleksi Resep Saya</h2>
    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded shadow mb-6">
            {{ session('success') }}
        </div>
    @endif
    @if($koleksis->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($koleksis as $koleksi)
                @php $resep = $koleksi->resep; @endphp
                @if($resep)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition flex flex-col">
                    @if ($resep->gambar)
                        <img src="{{ asset('storage/' . $resep->gambar) }}" class="w-full h-48 object-cover" alt="{{ $resep->nama }}">
                    @else
                        <div class="w-full h-48 flex items-center justify-center bg-yellow-100 text-yellow-400 text-6xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zm0 2c-2.21 0-4 1.79-4 4v5h8v-5c0-2.21-1.79-4-4-4z" />
                            </svg>
                        </div>
                    @endif
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-lg text-yellow-900 mb-1">{{ $resep->nama }}</h4>
                        <span class="inline-block text-xs text-yellow-700 mb-2">Oleh: {{ $resep->user->username ?? '-' }}</span>
                        <div class="mt-auto">
                            <a href="{{ route('resep.show', ['id' => $resep->id_resep]) }}" class="inline-block mt-2 px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition text-sm w-full text-center">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    @else
        <div class="text-yellow-700 text-center py-12 text-lg font-semibold">Belum ada resep di koleksi Anda.</div>
    @endif
</div>
@endsection
