@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
<div class="max-w-2xl mx-auto mt-8">
    <h2 class="text-xl font-bold mb-4">Hasil Pencarian Resep</h2>
    @if($reseps->count())
        <ul>
            @foreach($reseps as $resep)
                <li class="mb-4 border-b pb-2">
                    <a href="/resep/{{ $resep->slug ?? $resep->id }}" class="text-lg font-semibold text-yellow-900 hover:underline">
                        {{ $resep->nama }}
                    </a>
                    <div class="text-sm text-gray-500">{{ $resep->kategori ?? '' }}</div>
                </li>
            @endforeach
        </ul>
    @else
        <div class="text-gray-500">Tidak ada resep ditemukan.</div>
    @endif
</div>
@endsection
