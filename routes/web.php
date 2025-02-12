<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/product', [ProductController::class, 'products'])->name('products');

Route::get('/author', [AuthorController::class, 'author']);


// Profile
Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('profile.dashboard');
Route::get('/my-model', [ProfileController::class, 'myModel'])->name('profile.myModel');
Route::get('/upload', [ProfileController::class, 'upload'])->name('profile.upload');
Route::get('/purchase', [ProfileController::class, 'purchase'])->name('profile.purchase');
Route::get('/product-report', [ProfileController::class, 'productReport'])->name('profile.productReport');
Route::get('/sale-report', [ProfileController::class, 'saleReport'])->name('profile.saleReport');