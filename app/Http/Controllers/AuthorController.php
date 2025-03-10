<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author(int $id) {
        // Fetch author data and related products from database
        $author = User::find($id);
        $products = Product::where('user_id', $author->id)->get();
        return view('frontend.author.author', compact('author', 'products'));
    }
}
