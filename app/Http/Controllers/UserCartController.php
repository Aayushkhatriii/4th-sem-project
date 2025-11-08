<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserCart;
use Illuminate\Http\Request;

class UserCartController extends Controller
{
    public function update(Product $product, Request $request)
    {
        if(!auth()->check()){
            return redirect()->route('login')->with('error', 'Please login to update products to cart');
        }
        $user = auth()->user();
        $userCartItem = UserCart::where('user_id', $user->id)->where('product_id', $product->id)->first();
        $userCart = UserCart::updateOrCreate([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ], [
            'quantity' => ($request->action == 'add') ? (($userCartItem && $userCartItem->quantity) ? $userCartItem->quantity + 1 : 1) : (($userCartItem && $userCartItem->quantity) ? $userCartItem->quantity - 1 : 1),
        ]);
        if($userCart){
            session()->forget('product_updated_in_cart');
            session()->put('cart_items.' . $user->id, [
                'user_id' => $user->id,
                'quantity' => UserCart::where('user_id', $user->id)->sum('quantity')
            ]);
            session()->flash('product_updated_in_cart', true);
            return redirect()->back()->with('success', 'Product updated in cart successfully');
        }else{
            return redirect()->back()->with('error', 'Failed to update product in cart');
        }
    }

    public function cartProducts()
    {
        $user = auth()->user();
        $userCart = UserCart::where('user_id', $user->id)
            ->with('product', 'product.category')
            ->get()
            ->groupBy(function($cartItem) {
                return $cartItem->product->category->name ?? 'Uncategorized';
            });
        session()->put('cart_items.' . $user->id, [
            'user_id' => $user->id,
            'quantity' => UserCart::where('user_id', $user->id)->sum('quantity')
        ]);
        return view('cart', compact('userCart'));
    }
}