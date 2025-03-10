<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'handleRegister'])->name('handleRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');

Route::get('/products', [ProductController::class, 'products'])->name('products');

Route::get('/products/{id}', [ProductController::class, 'productDetail'])->name('products.detail');

Route::get('/author/{id}', [AuthorController::class, 'author'])->name('author');

// Profile
Route::middleware(['isLogin'])->group(function () {
    Route::get('/setting', [ProfileController::class, 'setting'])->name('profile.setting');
    Route::post('/setting', [ProfileController::class, 'updateProfile'])->name('profile.setting.update');

    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');

    Route::get('/upload', [ProfileController::class, 'upload'])->name('profile.upload');
    Route::post('/upload', [ProfileController::class, 'handleUpload'])->name('profile.upload.handle');

    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('profile.dashboard');
    Route::get('/my-model', [ProfileController::class, 'myModel'])->name('profile.myModel');

    Route::get('/purchase', [ProfileController::class, 'purchase'])->name('profile.purchase');
    Route::get('/product-report', [ProfileController::class, 'productReport'])->name('profile.productReport');
    Route::get('/sale-report', [ProfileController::class, 'saleReport'])->name('profile.saleReport');

    Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');

    Route::post('paypal/payment', [PayPalController::class, 'createPayment'])->name('paypal.payment');
    Route::get('paypal/success', [PayPalController::class, 'paymentSuccess'])->name('paypal.success');
    Route::get('paypal/cancel', [PayPalController::class, 'paymentCancel'])->name('paypal.cancel');

    Route::resource('wish-list', WishListController::class);

    Route::get('/admin', [AdminController::class, 'index']);
});