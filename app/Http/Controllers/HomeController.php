<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $newProducts = Product::latest()->get();
        $newCategories = Category::latest()->take(9)->get();

        return view ('frontend.home.index', compact('newProducts', 'newCategories'));
    }
}
