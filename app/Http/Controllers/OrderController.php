<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {   
        $products = Purchase::all(); 
        return view('pages.admin.order.index', compact('products'));
    }
}
