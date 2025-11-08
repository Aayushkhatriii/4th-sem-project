@if(session()->has('product_updated_in_cart') && session('product_updated_in_cart'))
    <p class="fixed bottom-6 right-6 z-50 bg-white rounded-lg shadow-lg px-5 py-3 text-green-500 font-semibold mt-2">
        Item updated in cart!
    </p>
@endif