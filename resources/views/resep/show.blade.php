@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-4">{{ $resep->nama }}</h2>
    <p class="text-sm text-gray-500 mb-4">Kategori: {{ $resep->kategori }}</p>
    @if ($resep->gambar)
        <img src="{{ asset('storage/' . $resep->gambar) }}" class="w-full h-64 object-cover mb-4 rounded" alt="{{ $resep->nama }}">
    @endif
    <div class="mb-4">
        <span class="font-semibold text-yellow-700">Bahan:</span>
        <p class="text-gray-700 whitespace-pre-line">{{ $resep->bahan }}</p>
    </div>
    <div>
        <span class="font-semibold text-yellow-700">Cara:</span>
        <p class="text-gray-700 whitespace-pre-line">{{ $resep->cara }}</p>
    </div>
    <a href="{{ url()->previous() }}" class="inline-block mt-6 px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
        kembali
    </a>
</div>
@endsection
