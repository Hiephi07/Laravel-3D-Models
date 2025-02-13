<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products() {
        return view('frontend.product');
    }

    public function productDetail($id) {
        $product = Product::find($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
                              ->where('id', '!=', $id)
                              ->latest()
                              ->take(6)
                              ->get();

        return view('frontend.product', compact('product', 'relatedProducts'));
    }
}
