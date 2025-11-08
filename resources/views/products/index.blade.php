<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4 justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Products
            </h2>
            <a href="{{ route('product.create') }}"
                class="p-4 rounded text-white bg-blue-600 font-semibold hover:underline">Create Product</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full table-auto text-white bg-gray-800 rounded-lg border border-gray-700">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="px-4 py-2 text-left">S.No.</th>
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Price</th>
                        <th class="px-4 py-2 text-left">Category</th>
                        <th class="px-4 py-2 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                        <tr>
                            <td class="px-4 py-2">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 flex items-center space-x-2"><img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover rounded"> <span></span>{{ $product->name }}</span></td>
                            <td class="px-4 py-2">{{ $product->price }}</td>
                            <td class="px-4 py-2">{{ $product->category->name ?? 'Uncategorized' }}</td>
                            <td class="px-4 py-2 space-x-4">

                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('product.edit', $product) }}"
                                    class="text-blue-600 font-semibold hover:underline">Edit</a>
                                    <form action="{{ route('product.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 font-semibold hover:underline">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>