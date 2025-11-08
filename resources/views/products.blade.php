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

    {{-- Main Items Section --}}
    <div class="max-w-7xl mx-auto px-6 py-10">
        <!-- Best Sellers -->
        <h6 class="text-xl font-semibold text-gray-800 mb-4">Electronics</h6>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Iron</div>
                <img src="{{ asset('images/Iron.jpg') }}" alt="Iron" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Fridge</div>
                <img src="{{ asset('images/Fridge.jpg') }}" alt="Fridge" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Air Fryer</div>
                <img src="{{ asset('images/Air-Fryer.jpg') }}" alt="Air Fryer" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Dough Mixer</div>
                <img src="{{ asset('images/Dough-Blender.jpg') }}" alt="Dough Mixer" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- More items -->
        <h6 class="text-xl font-semibold text-gray-800 mb-4">Shoes</h6>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Jordans</div>
                <img src="{{ asset('images/Jordan.jpg') }}" alt="Jordans" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Converse</div>
                <img src="{{ asset('images/Converse.jpg') }}" alt="Converse" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Chelsea Boots</div>
                <img src="{{ asset('images/Chelsea.jpg') }}" alt="Chelsea Boots"
                    class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Sports Shoes</div>
                <img src="{{ asset('images/Sports.jpg') }}" alt="Sports Shoes" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- New Arrivals -->
        <h6 class="text-xl font-semibold text-gray-800 mb-4">Gaming Items</h6>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Keyboard</div>
                <img src="{{ asset('images/Keyboard.jpg') }}" alt="Keyboard" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Mouse</div>
                <img src="{{ asset('images/Mouse.jpg') }}" alt="Mouse" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Monitor</div>
                <img src="{{ asset('images/Monitor.jpg') }}" alt="Monitor" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">GPU</div>
                <img src="{{ asset('images/GPU.jpg') }}" alt="GPU" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- More items -->
        <h6 class="text-xl font-semibold text-gray-800 mb-4">Lady Accessories</h6>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Lipstick</div>
                <img src="{{ asset('images/Lipstick.jpg') }}" alt="Lipstick" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Mascara</div>
                <img src="{{ asset('images/Mascara.jpg') }}" alt="Mascara" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Handbag</div>
                <img src="{{ asset('images/Handbag.jpg') }}" alt="Handbag"
                    class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Perfume</div>
                <img src="{{ asset('images/Perfume.jpg') }}" alt="Perfume" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- More items -->
        <h6 class="text-xl font-semibold text-gray-800 mb-4">Toys</h6>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Cars</div>
                <img src="{{ asset('images/Cars.jpg') }}" alt="Cars" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Teddy Bear</div>
                <img src="{{ asset('images/Bear.jpg') }}" alt="Teddy Bear" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Legos</div>
                <img src="{{ asset('images/Lego.jpg') }}" alt="Lego"
                    class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                <div class="bg-gray-100 text-center py-2 font-medium text-gray-700">Model</div>
                <img src="{{ asset('images/Models.jpg') }}" alt="Model Kits" class="w-full h-48 object-cover">
                <div class="text-center py-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>


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