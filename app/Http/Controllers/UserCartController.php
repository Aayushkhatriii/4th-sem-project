<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserCart;
use Illuminate\Http\Request;

class UserCartController extends Controller
{
    public function add(Product $product)
    {
        if(!auth()->check()){
            return redirect()->route('login')->with('error', 'Please login to add products to cart');
        }
        $user = auth()->user();
        $userCart = UserCart::updateOrCreate([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ], [
            'quantity' => 1,
        ]);
        if($userCart){
            session()->forget('product_added_to_cart');
            session()->push('cart', UserCart::where('user_id', $user->id)->sum('quantity'));
            session()->flash('product_added_to_cart', true);
            return redirect()->back()->with('success', 'Product added to cart successfully');
        }else{
            return redirect()->back()->with('error', 'Failed to add product to cart');
        }
    }

    public function cartProducts()
    {
        $user = auth()->user();
        $userCart = UserCart::where('user_id', $user->id)->get();
        return view('cart', [
            'userCart' => $userCart
        ]);
    }
}