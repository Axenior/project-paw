<?php

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