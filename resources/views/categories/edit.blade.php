<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Category
        </h2>
        <a href="{{ route('categories.index') }}" class="text-blue-600 font-semibold hover:underline">Back to Categories</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded shadow p-6">
                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200"
                            value="{{ old('name', $category->name) }}"
                            required
                        >
                        @error('name')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex space-x-4">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                            Update Category
                        </button>
                        <a href="{{ route('categories.index') }}"
                           class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded">
                           Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>