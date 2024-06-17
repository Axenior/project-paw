<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {   
        $purchases = Purchase::all(); 
        return view('pages.admin.order.index', compact('purchases'));
    }

    public function show(Purchase $purchase)
    {
        return view('pages.admin.order.show', ['purchase' => $purchase]);
    }

    public function process($purchase)
    {
        $purchase = Purchase::findOrFail($purchase);
        $purchase->status = 'diproses'; 
        $purchase->save();
        
        return redirect()->route('order.index')->with('success', 'Pesanan sedang diproses.');
    }

    public function complete($purchase)
    {
        $purchase = Purchase::findOrFail($purchase);
        $purchase->status = 'selesai'; 
        $purchase->save();

        return redirect()->route('order.index')->with('success', 'Pesanan Selesai.');

    }


    public function accept($purchase)
    {
        $purchase = Purchase::findOrFail($purchase);
        $purchase->status = 'diproses';
        $purchase->save();

        return redirect()->route('order.index')->with('success', 'Pesanan telah diterima dan sedang diproses.');

    }

    public function reject($purchase)
    {
        $purchase = Purchase::findOrFail($purchase);
        $purchase->status = 'ditolak';
        $purchase->save();

        return redirect()->route('order.index')->with('success', 'Pesanan telah ditolak.');
    }

}

