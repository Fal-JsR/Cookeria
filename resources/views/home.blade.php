<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cookeria</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen flex">
  <!-- Sidebar -->
  <aside class="w-1/4 bg-[#D6B987] p-8 flex flex-col justify-between">
    <div>
      <!-- Logo -->
      <div class="mb-10">
        <img src="{{ asset('images/koki.png') }}" alt="Cookeria" class="w-33 mx-auto"/>
      </div>
      <!-- Menu -->
      <div class="flex flex-col gap-4">
        @auth
          <div class="flex flex-col gap-3">
            <a href="/profile/{{ auth()->user()->username }}" class="flex flex-col items-center justify-center bg-white rounded-lg shadow hover:bg-yellow-100 transition p-4">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brown-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A11.953 11.953 0 0112 15c2.485 0 4.777.758 6.879 2.051M12 15V5m0 5a4 4 0 100-8 4 4 0 000 8z"/>
                </svg>
              </div>
              <span class="text-brown-900 font-semibold text-sm">Profile</span>
            </a>
            <a href="/resep/create" class="flex flex-col items-center justify-center bg-white rounded-lg shadow hover:bg-yellow-100 transition p-4">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brown-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3 8-8" />
                </svg>
              </div>
              <span class="text-brown-900 font-semibold text-sm">Posting Resep</span>
            </a>
            <a href="/koleksi" class="flex flex-col items-center justify-center bg-white rounded-lg shadow hover:bg-yellow-100 transition p-4">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brown-900" fill="currentColor" viewBox="0 0 20 20" stroke="none">
                  <path d="M5 4v12l5-4 5 4V4H5z"/>
                </svg>
              </div>
              <span class="text-brown-900 font-semibold text-sm">Koleksi Resep</span>
            </a>
          </div>
        @else
          <div class="flex flex-col gap-3">
            <a href="#" class="flex flex-col items-center justify-center bg-white rounded-lg shadow hover:bg-yellow-100 transition p-4" onclick="showLoginAlert()">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brown-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A11.953 11.953 0 0112 15c2.485 0 4.777.758 6.879 2.051M12 15V5m0 5a4 4 0 100-8 4 4 0 000 8z"/>
                </svg>
              </div>
              <span class="text-brown-900 font-semibold text-sm">Profile</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center bg-white rounded-lg shadow hover:bg-yellow-100 transition p-4" onclick="showLoginAlert()">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brown-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3 8-8" />
                </svg>
              </div>
              <span class="text-brown-900 font-semibold text-sm">Posting Resep</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center bg-white rounded-lg shadow hover:bg-yellow-100 transition p-4" onclick="showLoginAlert()">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-yellow-200 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brown-900" fill="currentColor" viewBox="0 0 20 20" stroke="none">
                  <path d="M5 4v12l5-4 5 4V4H5z"/>
                </svg>
              </div>
              <span class="text-brown-900 font-semibold text-sm">Koleksi Resep</span>
            </a>
          </div>
          <script>
            function showLoginAlert() {
              alert('Silahkan Log In atau Sign Up Terlebih dahulu!');
            }
          </script>
        @endauth
      </div>
    </div>
    @guest
    <p class="text-xs text-brown-900 mt-6 leading-relaxed">
        Untuk mulai posting dan membuat koleksi, silahkan
        <a href="/register" class="font-bold underline hover:text-brown-700">Sign Up</a>
        atau
        <a href="/login" class="font-bold underline hover:text-[#D6B987]">Log In</a>
    </p>
    @endguest
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-10">
      <div class="text-center w-full">
        <img src="{{ asset('images/koki.png') }}" alt="Cookeria" class="w-36 mx-auto mb-1" />
        <p class="text-sm text-gray-600 font-light">temukan resep, ciptakan rasa</p>
      </div>
      <div class="space-x-4 absolute right-10 top-10">
        @guest
          <a href="/register" class="px-4 py-2 border border-brown-900 text-brown-900 rounded">Sign Up</a>
          <a href="/login" class="px-4 py-2 bg-[#D6B987] text-white rounded">Log In</a>
        @endguest
        @auth
          {{-- <a href="/pagelogin/{{ auth()->user()->username }}" class="px-4 py-2 bg-[#D6B987] text-white rounded">Halaman Utama</a> --}}
        @endauth
      </div>
    </div>

    <!-- Search Bar -->
    <form class="flex mb-10 max-w-lg mx-auto" method="GET" action="/resep">
      <input
        type="text"
        name="nama"
        id="searchInput"
        placeholder="Cari resep disini"
        class="flex-grow border border-brown-900 rounded-l-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brown-900"
        autocomplete="off"
        value="{{ request('nama') }}"
        oninput="liveSearchResep()"
      />
    <button type="submit" class="bg-brown-900 text-white px-6 rounded-r-md">Cari</button>
    </form>
    <div class="relative max-w-lg mx-auto">
    <div id="searchResults" class="bg-white shadow rounded z-10 absolute left-0 right-0 w-full hidden"></div>
    </div>

    <script>
      let searchTimeout = null;

      function liveSearchResep() {
        clearTimeout(searchTimeout);
        const query = document.getElementById('searchInput').value.trim();
        const resultsDiv = document.getElementById('searchResults');
        if (query.length === 0) {
          resultsDiv.innerHTML = '';
          resultsDiv.classList.add('hidden');
          return;
        }
        searchTimeout = setTimeout(() => {
          fetch(`/api/search-resep?nama=${encodeURIComponent(query)}`)
            .then(res => {
              if (!res.ok) {
                throw new Error('Network response was not ok');
              }
              return res.json();
            })
            .then(data => {
              if (Array.isArray(data) && data.length > 0) {
                resultsDiv.innerHTML = data.map(resep =>
                  `<a href="/resep/${resep.id_resep}" class="block px-4 py-2 hover:bg-yellow-100 border-b last:border-b-0">
                    <span class="font-semibold">${resep.nama}</span>
                  </a>`
                ).join('');
                resultsDiv.classList.remove('hidden');
              } else {
                resultsDiv.innerHTML = '<div class="px-4 py-2 text-gray-500">Resep tidak ditemukan.</div>';
                resultsDiv.classList.remove('hidden');
              }
            })
            .catch((err) => {
              console.error('Search error:', err);
              resultsDiv.innerHTML = '<div class="px-4 py-2 text-red-500">Terjadi kesalahan.</div>';
              resultsDiv.classList.remove('hidden');
            });
        }, 300);
      }

      // Hide results when clicking outside
      document.addEventListener('click', function(e) {
        const resultsDiv = document.getElementById('searchResults');
        const input = document.getElementById('searchInput');
        if (!resultsDiv.contains(e.target) && e.target !== input) {
          resultsDiv.classList.add('hidden');
        }
      });
    </script>

    {{-- {{ dd($script) }} --}}


    <!-- Categories -->
    <h2 class="text-gray-900 font-semibold mb-6 max-w-lg mx-auto">Cari berdasarkan kategori</h2>
    <div class="grid grid-cols-3 gap-6 max-w-lg mx-auto">
      <a href="{{ route('kategori.show', ['kategori' => 'Makanan Berat']) }}">
        <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
          <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?auto=format&fit=crop&w=400&q=60" alt="Makanan Berat" class="w-full h-28 object-cover"/>
          <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Makanan Berat</span>
        </div>
      </a>
      <a href="{{ route('kategori.show', ['kategori' => 'Makanan Ringan']) }}">
        <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
          <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=400&q=60" alt="Makanan Ringan" class="w-full h-28 object-cover"/>
          <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Makanan Ringan</span>
        </div>
      </a>
      <a href="{{ route('kategori.show', ['kategori' => 'Pasta']) }}">
        <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
          <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=400&q=60" alt="Pasta" class="w-full h-28 object-cover"/>
          <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Pasta</span>
        </div>
      </a>
      <a href="{{ route('kategori.show', ['kategori' => 'Minuman']) }}">
        <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
          <img src="https://png.pngtree.com/png-clipart/20220125/original/pngtree-crystal-clear-drink-glass-png-image_7220102.png" alt="Minuman" class="w-full h-28 object-cover"/>
          <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Minuman</span>
        </div>
      </a>
      <a href="{{ route('kategori.show', ['kategori' => 'Cake']) }}">
        <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
          <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=400&q=60" alt="Cake" class="w-full h-28 object-cover"/>
          <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Cake</span>
        </div>
      </a>
      <a href="{{ route('kategori.show', ['kategori' => 'Makanan Penutup']) }}">
        <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
          <img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?auto=format&fit=crop&w=400&q=60" alt="Makanan Penutup" class="w-full h-28 object-cover"/>
          <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Makanan Penutup</span>
        </div>
      </a>
    </div>

    <!-- Resep List -->
    {{-- <div class="mt-10">
      @foreach($reseps as $resep)
        <div class="mb-8">
          <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="{{ $resep->gambar }}" alt="{{ $resep->nama }}" class="w-full h-48 object-cover"/>
            <div class="p-4 bg-white">
              <h4 class="font-bold text-lg text-yellow-900 mb-2">{{ $resep->nama }}</h4>
              <p class="text-xs text-gray-500 mb-2">{{ $resep->kategori }}</p>
              <p class="text-gray-700 text-sm mb-4">{{ $resep->deskripsi }}</p>
              <a href="/resep/{{ $resep->slug }}" class="block text-center bg-brown-900 text-white py-2 rounded hover:bg-brown-700 transition-colors duration-300">
                Lihat Resep
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div> --}}
  </main>
</body>
</html>
