<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign Up - Cookeria</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-100 to-pink-100 min-h-screen flex items-center justify-center">
  <div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full flex flex-col md:flex-row overflow-hidden">
    <!-- Left Illustration Section -->
    <div class="hidden md:flex md:w-1/2 bg-gradient-to-br from-indigo-400 to-pink-400 items-center justify-center p-10">
      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=400&q=80" alt="Cooking" class="rounded-xl shadow-lg w-full h-80 object-cover">
    </div>
    <!-- Right Form Section -->
    <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
      <h2 class="text-3xl font-bold text-gray-800 mb-2">Create Your Account</h2>
      <p class="text-gray-500 mb-8">Join Cookeria and start sharing your favorite recipes!</p>

      @if(session('success'))
        <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center">
          {{ session('success') }}
        </div>
      @endif

      <form class="space-y-5" id="registerForm" method="POST" action="{{ route('register.store') }}">
        @csrf
        <div>
          <label for="name" class="block text-gray-700 mb-1 font-medium">Full Name</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Your Name"
            required
            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400"
            value="{{ old('name') }}"
          />
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
                <div>
          <label for="username="block text-gray-700 mb-1 font-medium">username</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Your username"
            required
            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400"
            value="{{ old('username') }}"
          
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="email" class="block text-gray-700 mb-1 font-medium">Email Address</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="you@example.com"
            required
            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400"
            value="{{ old('email') }}"
          />
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="flex space-x-4">
          <div class="w-1/2">
            <label for="password" class="block text-gray-700 mb-1 font-medium">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Password"p

              required
              class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400"
            />
            @error('password')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="w-1/2">
            <label for="password_confirmation" class="block text-gray-700 mb-1 font-medium">Confirm</label>
            <input
              type="password"
              id="password_confirmation"
              name="password_confirmation"
              placeholder="Repeat Password"
              required
              class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400"
            />
          </div>
        </div>
        <div class="flex items-center">
          <input type="checkbox" id="terms" name="terms" required class="mr-2 accent-pink-500">
          <label for="terms" class="text-gray-600 text-sm">I agree to the <a href="#" class="text-pink-500 hover:underline">Terms & Conditions</a></label>
        </div>
        <button
          type="submit"
          class="w-full bg-pink-500 text-white font-semibold py-3 rounded-md hover:bg-pink-600 transition"
        >
          Sign Up
        </button>
      </form>
      <p class="mt-6 text-sm text-gray-600 text-center">
        Already have an account?
        <a href="/login" class="text-pink-500 font-semibold hover:underline">Sign In</a>
      </p>
    </div>
  </div>
</body>
</html>
