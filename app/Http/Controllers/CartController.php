<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $carts = $user->carts;
        // dd($carts[0]->pivot);
        return view('pages.app.cart.index',
            [
                'carts' => $carts        
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = new Cart();
        $cart->fill($validated); 
        $cart->save(); 

        $productName = Product::where('id',$request->product_id)->first()->name;
        
        return redirect()->route('cart.index')->with('success','Produk ' . $productName .' berhasil ditambahkan ke keranjang');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        return view('pages.app.cart.edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart->update($validated);

        $productName = Product::where('id',$request->product_id)->first()->name;
        
        return redirect()->route('cart.index')->with('success','Produk ' . $productName .' berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $productName = Product::where('id',$cart->product_id)->first()->name;
        $cart->delete();

        return redirect()->route('cart.index')->with('success','Produk ' . $productName .' berhasil dihapus dari keranjang');
    }
}
