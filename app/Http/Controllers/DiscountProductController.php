<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DiscountProductController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'discount_id' => 'required|exists:discounts,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $product = Product::findOrFail($validatedData['product_id']);


        $product->discount()->associate($validatedData['discount_id']);
        $product->save();




        return view('home', [
            'product' => $product,

        ]);
    }



}
