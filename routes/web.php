<?php

use App\Http\Controllers\ProdukController;
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


Route::get('/', function () {
    return view('welcome');
});


=======
Route::get('/homepage', function(){
    return view('pages.app.homepage');
});

Route::get('/smartphone', function(){
    return view('pages.app.product.index',[
        'product' => 'Smartphone'
    ]);
});

Route::get('/laptop', function(){
    return view('pages.app.product.index',[
        'product' => 'Laptop'
    ]);
});

Route::get('/tablet', function(){
    return view('pages.app.product.index',[
        'product' => 'Tablet'
    ]);
});

Route::get('/detail', function(){
    return view('pages.app.product.show');
});

Route::get('/checkout', function(){
    return view('pages.app.product.checkout');
});

Route::get('/cart', function(){
    return view('pages.app.cart.index');
});

Route::get('/cart/edit', function(){
    return view('pages.app.cart.edit');
});

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/admin/produk/', function () {
    return view('admin.product.index');})->name('admin.product');

Route::get('/admin/produk/create', function () {
    return view('admin.product.create');})->name('admin.product');

Route::get('/admin/pesanan', function () {
    return view('admin.order');})->name('admin.order');

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/login', function () {
    return view('pages.login');
});

