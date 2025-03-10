<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartList()
    {
        $user = Auth::user();
        $cart = $user->cart;

        if (!$cart) {
            // Sau sẽ thêm trang giỏ hàng trống
            return view('frontend.cart.cart');
        }

        $cartItems = $cart->items;

        // Tính tổng giá trị của các sản phẩm trong giỏ hàng
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->product->price;
        });

        // return view('frontend.cart.cart', compact('cartItems'));
        return view('frontend.cart.cart', compact('cartItems', 'totalPrice'));
    }

    public function addToCart(Request $request)
    {
        $user = Auth::user();
        $productId = $request->input('product_id');

        // Kiểm tra xem người dùng đã có giỏ hàng chưa
        $cart = $user->cart;
        if (!$cart) {
            // Nếu chưa có, tạo giỏ hàng mới
            $cart = Cart::create(['user_id' => $user->id]);
        }

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        $cartItem = $cart->items()->where('product_id', $productId)->first();

        if ($cartItem) {
            // Nếu đã có chuyển luôn về trang giỏ hàng
            return redirect()->route('cart.list');
        };

        // Nếu chưa có, thêm sản phẩm mới vào giỏ hàng
        $cart->items()->create([
            'product_id' => $productId,
        ]);

        return redirect()->route('cart.list');
    }

    public function removeFromCart(Request $request) 
    {
        $user = Auth::user();
        $productId = $request->input('product_id');
        $cart = $user->cart;

        if (!$cart) {
            return redirect()->route('home');
        }

        $cartItem = $cart->items()->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->route('cart.list');
    }
}