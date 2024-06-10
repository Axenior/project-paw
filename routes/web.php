<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;
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

Route::get('/admin/produk/', function () {
    return view('pages.admin.product.index');})->name('admin.product');

Route::get('/admin/produk/create', function () {
    return view('pages.admin.product.create');})->name('admin.product');

Route::get('/admin/pesanan', function () {
    return view('pages.admin.order.index');})->name('admin.order');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


