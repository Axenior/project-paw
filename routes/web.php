<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OrderController;
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


Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'check_login:admin'], function(){
        // DASHBOARD
        Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // PRODUK
        Route::get('/admin/product', [ProductController::class, 'admin'])->name('product.index');
        
        // TAMBAH PRODUK
        Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/admin/product', [ProductController::class, 'store'])->name('product.store');
        
        // DETAIL PRODUK
        Route::get('/admin/product/{product}', [ProductController::class, 'show'])->name('product.show');
        
        // EDIT PRODUK
        Route::get('/admin/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/admin/product/{product}', [ProductController::class, 'update'])->name('product.update');
        
        // HAPUS PRODUK
        Route::delete('/admin/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
        
        // DETAIL PESANAN
        Route::get('/admin/order/{purchase}', [OrderController::class, 'show'])->name('order.show');

        // STATUS PESANAN
        Route::post('/admin/order/{purchase}/process', [OrderController::class, 'process'])->name('order.process');
        Route::post('/admin/order/{purchase}/complete', [OrderController::class, 'complete'])->name('order.complete');

        // MENERIMA PESANAN
        Route::post('/admin/order/{purchase}/accept', [OrderController::class, 'accept'])->name('order.accept');
    
        // MENOLAK PESANAN
        Route::post('/admin/order/{purchase}/reject', [OrderController::class, 'reject'])->name('order.reject');
        
        Route::get('/admin/order', [OrderController::class, 'index'])->name('order.index');
                
    });

    Route::group(['middleware' => 'check_login:client'], function(){
        Route::resource('/cart', CartController::class);

        Route::get('/product/{product}/checkout', [CheckoutController::class, 'index'])->name('product.checkout');
        Route::post('/prduct/{product}/store',[CheckoutController::class, 'store'])->name('checkout.store');
        
        Route::get('/history', [CheckoutController::class, 'purchase'])->name('history');
        Route::get('/history/{purchase}/detail',[CheckoutController::class, 'detail'])->name('history.detail');
    });
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginProcess'])->name('login.process');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
