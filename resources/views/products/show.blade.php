<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $product->name }}
        </h2>
        <a href="{{ route('products.all') }}" class="text-blue-600 font-semibold hover:underline">Back to Products</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded shadow p-6">
                <div class="flex flex-col md:flex-row space-x-0 md:space-x-6 items-start">
                    @if($product->image)
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-48 h-48 object-cover mb-4 md:mb-0 rounded">
                    @endif
                    <div class="flex-1">
                        <h3 class="text-lg font-bold mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-2"><span class="font-semibold">Category:</span> {{ $product->category->name ?? 'Uncategorized' }}</p>
                        <p class="text-gray-700 dark:text-gray-300 mb-2"><span class="font-semibold">Price:</span> ${{ number_format($product->price, 2) }}</p>
                        <p class="text-gray-700 dark:text-gray-300 mb-4"><span class="font-semibold">Description:</span> {{ $product->description }}</p>
                        <div class="flex space-x-4 mt-6">
                            <a href="{{ route('products.edit', $product) }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                                Edit
                            </a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>