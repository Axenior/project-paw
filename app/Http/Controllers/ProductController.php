<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $category = $request->category;
        $products = Product::where('category', $category)->get();
        return view('pages.app.product.index',
            [
                'category' => $category,
                'products' => $products
            ]
        );
    }

    public function admin()
    {   
        $products = Product::all(); 
        return view('pages.admin.product.index', compact('products'));
    }

    public function detail(Product $product){
        return view('pages.app.product.show',
            [
                'product' => $product
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        // validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'warranty' => 'required|string|max:255',
            'memory' => 'required|string|max:255',
            'price' => 'required|integer|min:100000',
            'discount' => 'nullable|integer|min:0|max:100',
        ]);

        // upload foto
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $validated['path'] = 'images/products/' . $imageName;
        }

        // Simpan produk ke database
        $product = new Product();
        $product->fill($validated); 
        $product->save(); 

        // redirect produk berhasil
        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('pages.admin.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('pages.admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'warranty' => 'required|string|max:255',
            'memory' => 'required|string|max:255',
            'price' => 'required|integer|min:100000',
            'discount' => 'nullable|integer|min:0|max:100',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $validated['path'] = 'images/products/' . $imageName;
        }

        $product->update($validated);

        return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus.');
    }
}
