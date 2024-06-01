<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function showProduct()
    {
        $products = Product::all(); // Fetch all products from the database
        return view('cart.add_order', compact('products'));
    }
}
