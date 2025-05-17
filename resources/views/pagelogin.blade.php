<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cookeria</title>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-brown-200 p-4">
            <div class="text-center mb-6">
                <img src="/images/cookeria_logo.png" alt="Cookeria Logo" class="mx-auto h-16">
            </div>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-brown-800 hover:text-brown-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 3h18v2H3zM3 7h18v2H3zM3 11h18v2H3zM3 15h18v2H3zM3 19h18v2H3z" />
                            </svg>
                            Posting Resep
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-brown-800 hover:text-brown-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5 4h14v16H5zM5 2H3v20h2V2zm14 0h2v20h-2V2z" />
                            </svg>
                            Koleksi Resep
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-brown-800">Cookeria</h1>
                <p class="text-brown-600">temukan resep, ciptakan rasa</p>
            </div>

            <!-- Search Bar -->
            <div class="flex items-center justify-center mb-8">
                <input type="text" class="w-2/3 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring focus:ring-brown-300" placeholder="Cari resep di sini">
                <button class="px-4 py-2 bg-brown-600 text-white rounded-r-md hover:bg-brown-700">Cari</button>
            </div>

            <!-- Categories -->
            <h2 class="text-xl font-semibold text-brown-800 mb-4">Cari berdasarkan kategori</h2>
            <div class="grid grid-cols-3 gap-4">
                @for ($i = 0; $i < 1; $i++)
                <div class="relative group">
                    <img src="/images/th.jpg" alt="Makanan Berat" class="w-full rounded-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="text-white text-lg font-semibold">Makanan Berat</span>
                    </div>
                </div>
                @endfor

            </div>
        </main>
    </div>
</body>
</html>
