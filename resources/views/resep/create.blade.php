<script src="https://cdn.tailwindcss.com"></script>
@extends('layouts.app')
@section('content')
    {{-- Pastikan Tailwind CSS ter-load --}}
    @vite('resources/css/app.css')

    <div class="max-w-xl mx-auto mt-12 bg-white/90 rounded-2xl shadow-2xl p-10">
        <h2 class="text-3xl font-extrabold text-yellow-900 mb-2 text-center tracking-wide">Posting Resep Baru</h2>
        <p class="text-gray-500 mb-8 text-center">Bagikan kreasi masakan terbaikmu kepada dunia!</p>
        <form action="{{ route('resep.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label class="block mb-1 font-semibold text-yellow-900">Nama Resep</label>
                <input type="text" name="nama" class="w-full border border-yellow-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition" value="{{ old('nama') }}" required>
                @error('nama') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
            </div>
            <div>
                <label for="kategori" class="block mb-1 font-semibold text-yellow-900">Kategori</label>
                <select name="kategori" id="kategori" class="w-full border border-yellow-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Makanan Berat" {{ old('kategori') == 'Makanan Berat' ? 'selected' : '' }}>Makanan Berat</option>
                    <option value="Makanan Ringan" {{ old('kategori') == 'Makanan Ringan' ? 'selected' : '' }}>Makanan Ringan</option>
                    <option value="Pasta" {{ old('kategori') == 'Pasta' ? 'selected' : '' }}>Pasta</option>
                    <option value="Minuman" {{ old('kategori') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="Cake" {{ old('kategori') == 'Cake' ? 'selected' : '' }}>Cake</option>
                    <option value="Makanan Penutup" {{ old('kategori') == 'Makanan Penutup' ? 'selected' : '' }}>Makanan Penutup</option>
                </select>
                @error('kategori') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
            </div>
            <div>
                <label class="block mb-1 font-semibold text-yellow-900">Bahan</label>
                <textarea name="bahan" class="w-full border border-yellow-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition" rows="3" required>{{ old('bahan') }}</textarea>
                @error('bahan') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
            </div>
            <div>
                <label class="block mb-1 font-semibold text-yellow-900">Cara Membuat</label>
                <textarea name="cara" class="w-full border border-yellow-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition" rows="4" required>{{ old('cara') }}</textarea>
                @error('cara') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
            </div>
            <div>
                <label class="block mb-1 font-semibold text-yellow-900">Gambar (opsional)</label>
                <input type="file" name="gambar" class="w-full border border-yellow-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition">
                @error('gambar') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
            </div>
            <div class="flex justify-between gap-4 mt-8">
                <a href="{{ url()->previous() }}" class="w-1/2 text-center bg-yellow-500 text-white font-bold py-3 rounded-lg shadow hover:bg-yellow-600 transition text-lg">
                    Kembali
                </a>
                <button type="submit" class="w-1/2 bg-yellow-500 text-white font-bold py-3 rounded-lg shadow hover:bg-yellow-600 transition text-lg">
                    Simpan
                </button>
            </div>
        </form>
        {{-- Tampilkan semua resep user setelah form --}}
        {{-- @php
            $reseps = \App\Models\Resep::where('user_id', auth()->id())->get();
        @endphp
        <div class="mt-12">
            <h3 class="text-xl font-bold text-yellow-900 mb-4">Resep Anda</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($reseps as $resep)
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col">
                        <h4 class="font-semibold text-yellow-900 mb-2">{{ $resep->nama }}</h4>
                        <span class="text-xs text-yellow-700 mb-2">{{ $resep->kategori ?? '-' }}</span>
                        <div class="text-sm text-gray-700 mb-2">Bahan: {{ Str::limit($resep->bahan, 50) }}</div>
                        <a href="{{ route('resep.show', ['id' => $resep->id_resep ?? $resep->id]) }}" class="mt-auto inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition text-sm text-center">
                            Lihat Detail
                        </a>
                    </div>
                @empty
                    <div class="col-span-2 text-center text-yellow-700 py-8">Belum ada resep yang Anda buat.</div>
                @endforelse
            </div>
        </div> --}}
    </div>
@endsection
