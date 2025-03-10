<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();  // Lấy thông tin người dùng đã đăng nhập
        $wishlists = $user->wishlists()->with('product.productMedia')->get();  // Lấy danh sách wishlist và thông tin sản phẩm

        // return view('wishlist.index', compact('wishlists'));
        return view('frontend.profile.my-wish-list.index', compact('wishlists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($productId)
    {
        $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $product = Product::findOrFail($productId); // Tìm sản phẩm theo ID

        // Kiểm tra nếu sản phẩm chưa có trong wishlist của người dùng
        $existingWishlistItem = Wishlist::where('user_id', $user->id)
                                        ->where('product_id', $product->id)
                                        ->first();

        if (!$existingWishlistItem) {
            // Thêm sản phẩm vào wishlist
            Wishlist::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
            ]);

            // return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào wishlist!');
            return redirect()->route('wish-list.index');
        }

        return redirect()->back()->with('info', 'Sản phẩm đã có trong wishlist!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WishList $wishList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WishList $wishList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WishList $wishList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($productId)
    {
        $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $product = Product::findOrFail($productId); // Tìm sản phẩm theo ID

        // Tìm sản phẩm trong wishlist của người dùng và xóa
        $wishlistItem = Wishlist::where('user_id', $user->id)
                                ->where('product_id', $product->id)
                                ->first();

        if ($wishlistItem) {
            $wishlistItem->delete();

            return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi wishlist!');
        }

        return redirect()->back()->with('error', 'Sản phẩm không có trong wishlist!');
    }
}
