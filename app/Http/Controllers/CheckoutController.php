<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, Product $product){
        return view('pages.app.product.checkout',
            [
                'product' => $product,
                'quantity' => $request->quantity
            ]
        );
    }

    public function store(Request $request){
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
            'first_name' => 'required|string',
            'last_name' => 'string|nullable',
            'address_title' => 'required|string',
            'address' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'subdistrict' => 'required|string',
            'postal_code' => 'required|string',
            'shipping_service' => 'required|string',
            'insurance' => 'required|integer'
        ]);
        
        $product = Product::where('id',$request->product_id)->first();

        Purchase::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'product_name' => $product->name,
            'product_image' => $product->image,
            'product_path' => $product->path,
            'product_category' => $product->category,
            'product_memory' => $product->memory,
            'product_warranty' => $product->warranty,
            'product_description' => $product->description,
            'product_price' => $product->price,
            'product_discount' => $product->discount,
            'quantity' => $request->quantity,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address_title' => $request->address_title,
            'address' => $request->address,
            'province' => $request->province,
            'city' => $request->city,
            'subdistrict' => $request->subdistrict,
            'postal_code' => $request->postal_code,
            'shipping_service' => $request->shipping_service,
            'shipping_service_cost' => ($request->shipping_service == 'one day service' ? 21000 : 12000),
            'insurance' => $request->insurance,
            'status' => 'dipesan'
        ]);

        return redirect()->route('history')->with('success','Pemesanan produk berhasil');
    }

    public function purchase(){
        $user = Auth::user();

        // dd($user);
        $purchases = $user->purchases;
        // dd($purchases);
        // dd($carts[0]->pivot);
        return view('pages.app.purchase.index',
            [
                'purchases' => $purchases
            ]
        );
        // return view('pages.app.purchase.index');
    }

    public function detail(Purchase $purchase){
        return view('pages.app.purchase.show',compact('purchase'));
    }
}
