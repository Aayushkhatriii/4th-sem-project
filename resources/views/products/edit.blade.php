<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Product
        </h2>
        <a href="{{ route('products.all') }}" class="text-blue-600 font-semibold hover:underline">Back to Products</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded shadow p-6">
                <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Name</label>
                        <input type="text" name="name" id="name"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200"
                            value="{{ old('name', $product->name) }}" required>
                        @error('name')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="category_id" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Category</label>
                        <select name="category_id" id="category_id" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200" required>
                            <option value="">Select Category</option>
                            @foreach($categories ?? \App\Models\Category::where('user_id', auth()->user()->id)->get() as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? "selected" : "" }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Price</label>
                        <input type="number" name="price" id="price" step="0.01" min="0"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200"
                            value="{{ old('price', $product->price) }}" required>
                        @error('price')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Description</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200"
                            required>{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Product Image</label>
                        <input type="file" name="image" id="image" class="w-full px-3 py-2 border rounded dark:bg-gray-700 dark:text-gray-200" accept="image/*">
                        @error('image')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                        <p class="text-gray-500 text-xs mt-1">Leave blank to keep current image.</p>
                    </div>

                    <div class="flex space-x-4">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                            Update Product
                        </button>
                        <a href="{{ route('products.all') }}"
                            class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>