<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>E-commerce Nepal</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    {{-- navigation bar --}}
    <header>
        <nav class="bg-red-600 text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo/Brand -->
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-semibold">Ecommerce Nepal</h1>
                    </div>

                    <!-- Search Bar -->
                    <div class="flex-1 max-w-lg mx-8">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="text" placeholder="Search"
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-full leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-red-500 focus:border-red-500 text-gray-900">
                        </div>
                    </div>

                    <!-- Navigation Links -->
                    <div class="flex items-center space-x-6">
                        <!-- Home -->
                        <a href="/" class="hover:text-red-200 transition-colors duration-200">
                            Home
                        </a>

                        <!-- Products -->
                        <a href="/products" class="hover:text-red-200 transition-colors duration-200 flex items-center">
                            Products
                        </a>

                        <!-- Cart -->
                        <a href="/cart" class="hover:text-red-200 transition-colors duration-200 flex items-center">
                            Cart
                        </a>

                        <!-- Profile -->
                        <a href="/profile" class="hover:text-red-200 transition-colors duration-200 flex items-center">
                            Profile
                        </a>

                        @auth
                          <a href="/dashboard" class="hover:text-red-200 transition-colors duration-200 flex items-center">Dashboard</a>
                        @endauth
                        @guest
                          <!-- Login -->
                          <a href="/login" class="hover:text-red-200 transition-colors duration-200 flex items-center">
                            Login
                          </a>
                          
                          <!-- Register -->
                          <a href="/register" class="hover:text-red-200 transition-colors duration-200 flex items-center">
                            Register
                          </a>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero -->
  <main class="bg-[#faebd8]">
    <div class="flex flex-col-reverse md:flex-row-reverse justify-between items-center gap-10 md:h-[600px]">
      <!-- Image -->
      <div class="w-full">
        <img src="{{ asset('images/hero-section.jpg') }}" alt="Coffee" class="w-full h-[600px] object-cover" />
      </div>
    </div>

    {{-- Main Items Section --}}
    <div class="max-w-7xl mx-auto px-6 py-10">
  <!-- Best Sellers -->
  <h6 class="text-xl font-semibold text-gray-800 mb-4">Best Sellers</h6>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Jackets</div>
      <img src="{{ asset('images/Jacket.jpg') }}" alt="Jackets" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Electronics</div>
      <img src="{{ asset('images/Electronics.jpg') }}" alt="Electronics" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Home Decor</div>
      <img src="{{ asset('images/Home-Decor.jpg') }}" alt="Home Decor" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Toys</div>
      <img src="{{ asset('images/Toys.jpg') }}" alt="Toys" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>
  </div>

  <!-- More items -->
  <h6 class="text-xl font-semibold text-gray-800 mb-4">More items</h6>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Gaming items</div>
      <img src="{{ asset('images/Gaming.jpg') }}" alt="Gaming items" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Electronics</div>
      <img src="{{ asset('images/Electronics.jpg') }}" alt="Electronics" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Lady Accessories</div>
      <img src="{{ asset('images/Lady-Accessories.jpg') }}" alt="Lady Accessories" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Toys</div>
      <img src="{{ asset('images/Toys.jpg') }}" alt="Toys" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>
  </div>

  <!-- New Arrivals -->
  <h6 class="text-xl font-semibold text-gray-800 mb-4">New Arrivals</h6>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Pants</div>
      <img src="{{ asset('images/Pants.jpg') }}" alt="Pants" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Shoes</div>
      <img src="{{ asset('images/Shoes.jpg') }}" alt="Shoes" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Watches</div>
      <img src="{{ asset('images/Watch.jpg') }}" alt="Watches" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Jersey</div>
      <img src="{{ asset('images/Jersey.jpeg') }}" alt="Jersey" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>
  </div>
</div>

  </main>
    
    <!-- Footer -->
    <footer>
        <div class="bg-gray-100 dark:bg-gray-900 p-6">
            <div class="max-w-7xl mx-auto text-center">
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    &copy; 2024 Ecommerce Nepal. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>