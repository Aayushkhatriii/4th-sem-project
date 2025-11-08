@props(['userCart'])

<div class="mb-10">
    @foreach ($userCart as $categoryName => $items)
        <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ $categoryName }}</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-10">
            @foreach ($items as $item)
                <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                    <h3 class="bg-gray-100 text-center py-2 font-medium text-gray-700">{{ $item->product->name }}</h3>
                    <img src="{{ asset('products/images/' . $item->product->image) }}" alt="{{ $item->product->name }}"
                        class="w-full h-48 object-cover">
                    <div class="text-center py-3">
                        <div class="flex items-center justify-center gap-3 mb-2">
                            <p>Available Quantity: {{ $item->product->quantity }}</p>
                            <span class="font-semibold text-gray-600">Quantity:</span>
                            <form action="{{ route('cart.update', $item->product->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="action" value="add">
                                <button type="submit" class="text-blue-600 font-semibold hover:underline">+</button>
                            </form>
                            <span class="font-bold">{{ $item->quantity }}</span>
                            <form action="{{ route('cart.update', $item->product->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="action" value="sub">
                                <button type="submit" class="text-red-600 font-semibold hover:underline" {{ $item->quantity <= 1 ? 'disabled' : '' }}>-</button>
                            </form>
                        </div>
                        <div class="text-sm text-gray-500 mb-1">
                            Price: Rs. {{ number_format($item->product->price ?? 0, 2) }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>