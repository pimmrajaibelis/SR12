<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)
            ->where('is_featured', true)
            ->latest()
            ->take(10)
            ->get();

        return view('home', compact('products'));
    }
}
