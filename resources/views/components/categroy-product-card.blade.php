@props(['category'])

<h6 class="text-xl font-semibold text-gray-800 mb-4">{{ $category->name }}</h6>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
    @foreach ($category->products as $product)
        <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
            <h3 class="bg-gray-100 text-center py-2 font-medium text-gray-700">{{ $product->name }}</h3>
            <img src="{{ asset('products/images/' . $product->image) }}" alt="{{ $product->name }}"
                class="w-full h-48 object-cover">
            <p class="text-center">
                <form action="{{ route('cart.update', $product->id) }}" method="post" class="py-3 text-center">
                    @csrf
                    <input type="hidden" name="action" value="add">
                    <button type="submit" class="text-blue-600 font-semibold hover:underline">Add to Cart</button>
                </form>
            </p>
        </div>
    @endforeach
</div>
