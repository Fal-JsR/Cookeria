<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookeria Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom color for brown */
    :root {
      --brown-500: #8B4513;
      --brown-600: #6F3A0F;
      --brown-700: #56300D;
      --brown-300: #A0522D;
    }
    .text-brown-700 { color: var(--brown-700); }
    .text-brown-500 { color: var(--brown-500); }
    .bg-brown-600 { background-color: var(--brown-600); }
    .hover\:bg-brown-700:hover { background-color: var(--brown-700); }
    .border-brown-300 { border-color: var(--brown-300); }
    .focus\:ring-brown-500:focus { --tw-ring-color: var(--brown-500); }
  </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white shadow-lg rounded-lg px-8 py-10 w-full max-w-md relative">
    <!-- Close button -->
    <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 transition" aria-label="Close">
      <span class="text-xl font-bold">&times;</span>
    </button>

    <!-- Logo and Title -->
    <div class="text-center mb-8">
      {{-- <img src="https://via.placeholder.com/50" alt="Logo" class="mx-auto mb-2" /> --}}
      <h2 class="text-3xl font-bold text-[#D6B987] mb-1">Cookeria</h2>
      <p class="text-gray-600 text-base">Login</p>
    </div>

    <!-- Login Form -->
    <form class="space-y-6" method="POST" action="{{ route('login.store') }}">
      @csrf
      <div>
        <label for="email" class="block text-[#D6B987] font-medium mb-2">Masukan Email</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Email"
          required
          class="w-full border border-brown-300 rounded-md px-4 py-2 text-brown-700 focus:outline-none focus:ring-2 focus:ring-brown-500"
          value="{{ old('email') }}"
        />
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>
      <div>
        <label for="password" class="block text-[#D6B987] font-medium mb-2">Masukan Password</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Password"
          class="w-full border border-brown-300 rounded-md px-4 py-2 text-brown-700 focus:outline-none focus:ring-2 focus:ring-brown-500"
          required
        />
        @error('password')
          <div class="flex items-center bg-blue-300 text-white text-sm font-bold px-4 py-3 mt-1 rounded" role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
            <p>{{ $message }}</p>
          </div>
        @enderror
      </div>
      <div class="flex justify-between items-center">
        <a href="#" class="text-[#D6B987] text-sm hover:underline">Lupa Password?</a>
      </div>
      <button
        type="submit"
        class="w-full bg-[#D6B987] text-white font-semibold py-3 rounded-md hover:bg-brown-700 transition"
      >
        Login
      </button>
    </form>
  </div>
</body>
</html>

