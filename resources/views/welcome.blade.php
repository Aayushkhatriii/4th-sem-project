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
    @include('layouts.header')

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
  @foreach ($categories as $category)
    @include('components.categroy-product-card', ['category' => $category])
  @endforeach
  {{-- <h6 class="text-xl font-semibold text-gray-800 mb-4">Best Sellers</h6>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Jackets</div>
      <img src="{{ asset('images/Jacket.jpg') }}" alt="Jackets" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Electronics</div>
      <img src="{{ asset('images/Electronics.jpg') }}" alt="Electronics" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Home Decor</div>
      <img src="{{ asset('images/Home-Decor.jpg') }}" alt="Home Decor" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Toys</div>
      <img src="{{ asset('images/Toys.jpg') }}" alt="Toys" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
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
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Electronics</div>
      <img src="{{ asset('images/Electronics.jpg') }}" alt="Electronics" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Lady Accessories</div>
      <img src="{{ asset('images/Lady-Accessories.jpg') }}" alt="Lady Accessories" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Toys</div>
      <img src="{{ asset('images/Toys.jpg') }}" alt="Toys" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
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
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Shoes</div>
      <img src="{{ asset('images/Shoes.jpg') }}" alt="Shoes" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Watches</div>
      <img src="{{ asset('images/Watch.jpg') }}" alt="Watches" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
      <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Jersey</div>
      <img src="{{ asset('images/Jersey.jpeg') }}" alt="Jersey" class="w-full h-48 object-cover">
      <div class="text-center py-3">
        <a href="{{ route('all-products') }}" class="text-blue-600 font-semibold hover:underline">Shop Now</a>
      </div>
    </div> --}}
  </div>
</div>

  </main>
    
    <!-- Footer -->
    @include('layouts.footer')
</body>

</html>