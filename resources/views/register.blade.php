<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign Up - Cookeria</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-100 to-pink-10 min-h-screen flex items-center justify-center">

    <!-- Left Illustration -->

    <!-- Right Form -->
    <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
    <h2 class="text-3xl font-bold text-[#D6B987] mb-2 text-center">Cookeria Sign Up</h2>
      <p class="text-gray-500 mb-8 text-center">Join Cookeria and start sharing your favorite recipes!</p>

      @if(session('success'))
        <div class="mt-4 bg-amber-600 border border-amber-800 text-amber-900 px-4 py-3 rounded relative text-center">
          {{ session('success') }}
        </div>
      @endif

      <form class="space-y-5" id="registerForm" method="POST" action="{{ route('register.store') }}">
        @csrf

        <div>
          <label for="name" class="block text-gray-700 mb-1 font-medium">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name" required
            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-amber-800 transition duration-200"
            value="{{ old('name') }}" />
          @error('name')
            <p class="text-amber-800 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="username" class="block text-gray-700 mb-1 font-medium">Username</label>
          <input type="text" id="username" name="username" placeholder="Your Username" required
            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-amber-800 transition duration-200"
            value="{{ old('username') }}" />
          @error('username')
            <p class="text-amber-800 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="email" class="block text-gray-700 mb-1 font-medium">Email Address</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required
            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-amber-800 transition duration-200"
            value="{{ old('email') }}" />
          @error('email')
            <p class="text-amber-800 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex space-x-4">
          <div class="w-1/2">
            <label for="password" class="block text-gray-700 mb-1 font-medium">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required
              class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-amber-800 transition duration-200" />
            @error('password')
              <p class="text-amber-800 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="w-1/2">
            <label for="password_confirmation" class="block text-gray-700 mb-1 font-medium">Confirm</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat Password" required
              class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-amber-800 transition duration-200" />
          </div>
        </div>

        <div class="flex items-center">
          <input type="checkbox" id="terms" name="terms" required class="mr-2 accent-amber-800">
          <label for="terms" class="text-gray-600 text-sm">"Selamat Datang di Situs Resep Masakan Kami!" <a href="https://chatgpt.com/canvas/shared/683f3ef0c67c81918262ef18311ef468" class="text-amber-800 hover:underline">Terms & Conditions</a></label>
        </div>

        <button type="submit"
          class="w-full bg-[#D6B987] text-white font-semibold py-3 rounded-md hover:bg-amber-800 transition duration-200">
          Sign Up
        </button>
      </form>

      <p class="mt-6 text-sm text-gray-600 text-center">
        Already have an account?
        <a href="/login" class="text-[#D6B987] font-semibold hover:underline">Sign In</a>
      </p>
    </div>
  </div>
</body>
</html>
