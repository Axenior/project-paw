<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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


Route::redirect('/','/homepage');

Route::get('/homepage',[HomepageController::class, 'index'])->name('homepage');

Route::get('/category/{category?}',[ProductController::class, 'index'])->name('product.category');
Route::get('/product/{product?}',[ProductController::class, 'detail'])->name('product.detail');
Route::get('/product/{product}/checkout', [ProductController::class, 'checkout'])->name('product.checkout');

Route::resource('/cart', CartController::class)->middleware('auth');

Route::get('/cart/edit', function(){
    return view('pages.app.cart.edit');
});

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
});

// PRODUK
Route::get('/admin/produk', [ProductController::class, 'admin'])->name('product.index');

// TAMBAH PRODUK
Route::get('/admin/produk/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/admin/produk', [ProductController::class, 'store'])->name('product.store');

// DETAIL PRODUK
Route::get('/admin/produk/{product}', [ProductController::class, 'show'])->name('product.show');

// EDIT PRODUK
Route::get('/admin/produk/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/produk/{product}', [ProductController::class, 'update'])->name('product.update');

// HAPUS PRODUK
Route::delete('/admin/produk/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/admin/pesanan', function () {
    return view('pages.admin.order.index');})->name('admin.order');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


