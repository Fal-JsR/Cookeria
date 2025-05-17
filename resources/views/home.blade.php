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
        <img src="https://i.imgur.com/UQeo3mc.png" alt="Cookeria Logo" class="w-33 mx-auto"/>
      </div>
      <!-- Menu -->
      <nav class="space-y-6 text-brown-900 text-sm font-medium">
        <a href="#" class="flex items-center space-x-3 hover:text-brown-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3 8-8" /></svg>
          <span>Posting Resep</span>
        </a>
        <a href="#" class="flex items-center space-x-3 hover:text-brown-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" stroke="none"><path d="M5 4v12l5-4 5 4V4H5z"/></svg>
          <span>Koleksi Resep</span>
        </a>
      </nav>
    </div>
    <p class="text-xs text-brown-900 mt-6 leading-relaxed">
      Untuk mulai posting dan membuat koleksi, silahkan <strong>Sign Up</strong> atau <strong>Log In</strong>
    </p>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-10">
      <div class="text-center w-full">
        <img src="https://i.imgur.com/UQeo3mc.png" alt="Cookeria Logo" class="w-36 mx-auto mb-1" />
        <p class="text-sm text-gray-600 font-light">temukan resep, ciptakan rasa</p>
      </div>
      <div class="space-x-4 absolute right-10 top-10">
         @guest
        <a href="/register" class="px-4 py-2 border border-brown-900 text-brown-900 rounded">Sign Up</a>
          <a href="/login" class="px-4 py-2 bg-[#493628] text-white rounded">Log In</a>
        @endguest
        @auth
          <a href="/pagelogin" class="px-4 py-2 bg-green-600 text-white rounded">Dashboard</a>
        @endauth
      </div>
    </div>

    <!-- Search Bar -->
    <form class="flex mb-10 max-w-lg mx-auto">
      <input
        type="text"
        placeholder="Cari resep disini"
        class="flex-grow border border-brown-900 rounded-l-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brown-900"
      />
      <button type="submit" class="bg-brown-900 text-white px-6 rounded-r-md">Cari</button>
    </form>

    <!-- Categories -->
    <h2 class="text-gray-900 font-semibold mb-6 max-w-lg mx-auto">Cari berdasarkan kategori</h2>
    <div class="grid grid-cols-3 gap-6 max-w-lg mx-auto">
      <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?auto=format&fit=crop&w=400&q=60" alt="Makanan Berat" class="w-full h-28 object-cover"/>
        <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Makanan Berat</span>
      </div>
      <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=400&q=60" alt="Makanan Ringan" class="w-full h-28 object-cover"/>
        <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Makanan Ringan</span>
      </div>
      <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=400&q=60" alt="Pasta" class="w-full h-28 object-cover"/>
        <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Pasta</span>
      </div>
      <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1543352634-13a7dc2042d7?auto=format&fit=crop&w=400&q=60" alt="Minuman" class="w-full h-28 object-cover"/>
        <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Minuman</span>
      </div>
      <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=400&q=60" alt="Cake" class="w-full h-28 object-cover"/>
        <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Cake</span>
      </div>
      <div class="relative rounded-lg overflow-hidden cursor-pointer shadow-md hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?auto=format&fit=crop&w=400&q=60" alt="Makanan Penutup" class="w-full h-28 object-cover"/>
        <span class="absolute bottom-2 left-2 text-white text-xs font-semibold bg-black bg-opacity-50 px-2 py-1 rounded">Makanan Penutup</span>
      </div>
    </div>
  </main>
</body>
</html>
