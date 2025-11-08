<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserCart;
use Illuminate\Http\Request;

class UserCartController extends Controller
{
    public function update(Product $product, Request $request)
    {
        // session()->forget('cart');
        // dd(UserCart::where('user_id', auth()->user()->id)->sum('quantity'));
        // dd(session()->all());
        // session()->forget('product_updated_in_cart');
        // return;
        if(!auth()->check()){
            return redirect()->route('login')->with('error', 'Please login to update products to cart');
        }
        $user = auth()->user();
        $quantity = UserCart::where('user_id', $user->id)->where('product_id', $product->id)->first()->quantity;
        $userCart = UserCart::updateOrCreate([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ], [
            'quantity' => ($request->action == 'add') ? $quantity + 1 : $quantity - 1,
        ]);
        if($userCart){
            session()->forget('product_updated_in_cart');
            session()->push('cart_items', UserCart::where('user_id', $user->id)->sum('quantity'));
            session()->flash('product_updated_in_cart', true);
            return redirect()->back()->with('success', 'Product updated in cart successfully');
        }else{
            return redirect()->back()->with('error', 'Failed to update product in cart');
        }
    }

    public function cartProducts()
    {
        session()->forget('cart_items');
        $user = auth()->user();
        $userCart = UserCart::where('user_id', $user->id)
            ->with('product', 'product.category')
            ->get()
            ->groupBy(function($cartItem) {
                return $cartItem->product->category->name ?? 'Uncategorized';
            });
        return view('cart', compact('userCart'));
    }
}