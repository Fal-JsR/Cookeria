<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile | Cookeria</title>
</head>
<body class="bg-gradient-to-br from-yellow-50 via-amber-100 to-[#e7d7b7] min-h-screen">

    <!-- Header -->
    <header class="flex justify-between items-center px-8 py-4 bg-white/90 shadow-lg border-b border-yellow-200">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/koki.png') }}" alt="Cookeria Logo" class="h-10 w-10 rounded-full shadow">
            <h1 class="text-2xl font-bold text-yellow-900 tracking-wide">Cookeria</h1>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center gap-1 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition shadow">
                <span>Log Out</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7" />
                </svg>
            </button>
        </form>
    </header>

    <div class="absolute left-8 top-20">
          <a href="{{ route('home') }}"
            class="inline-block px-6 py-2 bg-[#D6B987] text-white text-sm font-medium rounded shadow hover:bg-amber-600 transition">
            Kembali ke Beranda
          </a>
         </div>

    <!-- Profile Card -->
    <section class="max-w-3xl mx-auto mt-12 relative">
        <div class="bg-white/95 rounded-3xl shadow-2xl border border-yellow-200 p-10 flex flex-col md:flex-row items-center gap-10">
            <div class="flex-shrink-0 flex flex-col items-center">
                <div class="bg-gradient-to-br from-yellow-400 to-yellow-700 p-2 rounded-full shadow-lg mb-2 border-4 border-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <circle cx="12" cy="8" r="6" fill="#fde68a"/>
                        <ellipse cx="12" cy="19" rx="8" ry="4" fill="#fde68a"/>
                        <path stroke="#b45309" stroke-width="2" d="M12 14v2"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-extrabold text-yellow-800 mt-4 mb-1 tracking-wide">
                    {{ '@' . auth()->user()->username }}
                </h2>
                <p class="text-yellow-600 text-sm mb-4">
                    Bergabung {{ auth()->user()->created_at->translatedFormat('F Y') }}
                </p>
                <div class="w-32 border-t border-dashed border-yellow-300 my-2"></div>
                <div class="text-center mt-4">
                    <div class="text-3xl font-bold text-yellow-800">{{ $reseps->count() }}</div>
                    <div class="text-xs text-yellow-600">Total Resep</div>
                </div>
            </div>
            <div class="flex-1 w-full">
                <div class="bg-yellow-50/80 rounded-2xl p-8 shadow-inner border border-yellow-100">
                    <h3 class="text-xl font-semibold text-yellow-900 mb-2">Profil Anda</h3>
                    <p class="text-yellow-700 mb-4">Selamat datang di halaman profil Anda! Kelola resep dan informasi akun Anda di sini.</p>
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="flex-1">
                            <div class="mb-4">
                                <span class="block text-xs text-yellow-600">Nama Lengkap</span>
                                <span class="font-medium text-yellow-900">{{ auth()->user()->name }}</span>
                            </div>
                            <div>
                                <span class="block text-xs text-yellow-600">Email</span>
                                <span class="font-medium text-yellow-900">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                        <div class="hidden md:block w-px bg-yellow-200 mx-2"></div>
                        <div class="flex-1">
                            <div class="mb-4">
                                <span class="block text-xs text-yellow-600">Username</span>
                                <span class="font-medium text-yellow-900">{{ '@' . auth()->user()->username }}</span>
                            </div>
                            <div>
                                <span class="block text-xs text-yellow-600">Bergabung Sejak</span>
                                <span class="font-medium text-yellow-900">{{ auth()->user()->created_at->translatedFormat('d F Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Message -->
    @if (session('success'))
        <div class="max-w-3xl mx-auto mt-6">
            <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded shadow">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Resep Grid -->
    <section class="max-w-6xl mx-auto mt-14 px-2">
        <h3 class="text-xl font-semibold text-yellow-900 mb-6 border-b border-yellow-200 pb-2">Resep Saya</h3>
        @if($reseps->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($reseps as $resep)
                    <div class="bg-white rounded-2xl shadow-xl border border-yellow-100 overflow-hidden hover:shadow-2xl transition flex flex-col group">
                        @if ($resep->gambar)
                            <img src="{{ asset('storage/' . $resep->gambar) }}" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" alt="{{ $resep->nama }}">
                        @else
                            <div class="w-full h-48 flex items-center justify-center bg-yellow-100 text-yellow-400 text-6xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zm0 2c-2.21 0-4 1.79-4 4v5h8v-5c0-2.21-1.79-4-4-4z" />
                                </svg>
                            </div>
                        @endif
                        <div class="p-5 flex-1 flex flex-col border-t border-yellow-100">
                            <h4 class="font-bold text-lg text-yellow-900 mb-1">{{ $resep->nama }}</h4>
                            <span class="inline-block text-xs text-yellow-700 mb-2">{{ $resep->kategori ?? '-' }}</span>
                            <div class="mt-auto">
                                <a href="{{ route('resep.show', ['id' => $resep->id_resep]) }}" class="inline-block mt-2 px-4 py-2 bg-[#D6B987] text-white rounded hover:bg-yellow-600 transition text-sm w-full text-center shadow">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-yellow-700 text-center py-12 text-lg font-semibold">Belum ada resep yang diposting.</div>
        @endif
    </section>
</body>
</html>
