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
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <a href="/dashboard"
                            class="hover:text-red-200 transition-colors duration-200 flex items-center">Dashboard</a>
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