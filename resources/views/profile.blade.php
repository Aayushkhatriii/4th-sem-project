<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-commerce Nepal</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#dc2626',
                        secondary: '#1f2937'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'ui-sans-serif', 'system-ui']
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex flex-col font-sans">
    
    <!-- Navigation Bar -->
    <nav class="bg-red-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <!-- Logo/Brand -->
                <div class="flex-shrink-0">
                    <h1 class="text-xl font-bold tracking-tight">Ecommerce Nepal</h1>
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
                        <input type="text" placeholder="Search products..."
                            class="block w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-full leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-2 focus:ring-red-500 focus:border-red-500 text-gray-900 transition-all duration-200">
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="flex items-center space-x-8">
                    <a href="/" class="hover:text-red-200 transition-colors duration-200 font-medium">Home</a>
                    <a href="/products" class="hover:text-red-200 transition-colors duration-200 font-medium">Products</a>
                    <a href="/cart" class="hover:text-red-200 transition-colors duration-200 font-medium">Cart</a>
                    <a href="/profile" class="hover:text-red-200 transition-colors duration-200 font-medium">Profile</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Profile Section -->
    <main class="max-w-5xl w-full mx-auto bg-white shadow-xl rounded-2xl mt-12 mb-12 overflow-hidden">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-red-600 to-red-700 px-10 py-8">
            <h2 class="text-3xl font-bold text-white tracking-tight">My Profile</h2>
            <p class="text-red-100 mt-2 font-medium">Manage your personal information and preferences</p>
        </div>

        <div class="px-10 py-10">
            <!-- Profile Picture + Info Section -->
            <div class="flex flex-col lg:flex-row lg:items-start lg:space-x-12 mb-12">
                <!-- Picture Upload -->
                <div class="flex flex-col items-center lg:items-start mb-8 lg:mb-0">
                    <div class="relative group">
                        <img id="profilePreview" src="https://placehold.co/160x160" alt="Profile Picture"
                             class="w-40 h-40 rounded-full object-cover shadow-lg border-4 border-white ring-4 ring-gray-200 mb-6 transition-all duration-300 group-hover:ring-red-300">
                        <div class="absolute inset-0 rounded-full bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <label class="cursor-pointer bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:scale-105 transition-all duration-200">
                        Upload Photo
                        <input type="file" id="profilePic" accept="image/*" class="hidden" onchange="previewImage(event)">
                    </label>
                </div>

                <!-- Static Info -->
                <div class="flex-1 bg-gray-50 rounded-xl p-8 border border-gray-200">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Account Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-red-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="text-gray-600 font-medium">Username:</span>
                            <span class="ml-2 text-gray-900 font-semibold">johndoe123</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-red-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-gray-600 font-medium">Email:</span>
                            <span class="ml-2 text-gray-900 font-semibold">johndoe@example.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Editable Form -->
            <div class="bg-white border border-gray-200 rounded-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-8">Personal Details</h3>
                
                <form class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Phone -->
                    <div class="space-y-3">
                        <label class="flex items-center text-gray-800 font-semibold text-lg">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Phone Number
                        </label>
                        <input type="tel" placeholder="Enter your phone number"
                            class="w-full border-2 border-gray-300 rounded-xl px-5 py-4 text-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-all duration-200 hover:border-gray-400">
                    </div>

                    <!-- Date of Birth -->
                    <div class="space-y-3">
                        <label class="flex items-center text-gray-800 font-semibold text-lg">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Date of Birth
                        </label>
                        <input type="date"
                            class="w-full border-2 border-gray-300 rounded-xl px-5 py-4 text-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-all duration-200 hover:border-gray-400">
                    </div>

                    <!-- Province (Full Width) -->
                    <div class="lg:col-span-2 space-y-3">
                        <label class="flex items-center text-gray-800 font-semibold text-lg">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Province
                        </label>
                        <select class="w-full border-2 border-gray-300 rounded-xl px-5 py-4 text-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-all duration-200 hover:border-gray-400 bg-white">
                            <option value="">Select your province</option>
                            <option value="1">Koshi Province</option>
                            <option value="2">Madhesh Province</option>
                            <option value="3">Bagmati Province</option>
                            <option value="4">Gandaki Province</option>
                            <option value="5">Lumbini Province</option>
                            <option value="6">Karnali Province</option>
                            <option value="7">Sudurpashchim Province</option>
                        </select>
                    </div>
                </form>

                <!-- Save Button -->
                <div class="pt-10 flex justify-center lg:justify-start">
                    <button type="submit"
                        class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-10 py-4 rounded-xl font-bold text-lg shadow-xl transform hover:scale-105 transition-all duration-200 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Save Changes
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- JS for image preview -->
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                document.getElementById('profilePreview').src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <!-- Footer -->
    <footer class="mt-auto">
        <div class="bg-gray-800 text-white py-8">
            <div class="max-w-7xl mx-auto text-center px-6">
                <p class="text-gray-300 text-sm font-medium">
                    &copy; 2024 Ecommerce Nepal. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>