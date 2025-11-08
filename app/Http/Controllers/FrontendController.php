<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('welcome', [
            'categories' => $categories
        ]);
    }

    public function allProducts()
    {
        $categories = Category::all();
        return view('products', [
            'categories' => $categories
        ]);
    }
}
