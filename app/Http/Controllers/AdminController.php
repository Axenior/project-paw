<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
    $totalProducts = Product::count();
    $soldProducts = Purchase::sum('quantity');
    $ordersProcessing = Purchase::where('status', 'diproses')->count();
    $ordersCompleted = Purchase::where('status', 'selesai')->count();

    return view('pages.admin.dashboard', compact('totalProducts', 'soldProducts', 'ordersProcessing', 'ordersCompleted'));
    }
}
