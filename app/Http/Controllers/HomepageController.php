<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index(){
        $bestSmartphone = Product::where('category','smartphone')->orderByDesc('price')->first();
        $bestLaptop = Product::where('category','laptop')->orderByDesc('price')->first();
        $bestTablet = Product::where('category','tablet')->orderByDesc('price')->first();
        $bestProducts = [$bestSmartphone, $bestLaptop, $bestTablet];

        $discountProducts = Product::where('discount','!=',0)->get();
        $maxDiscount = $discountProducts->max('discount');

        $latestProducts = Product::latest()->take(6)->get();

        return view('pages.app.homepage',
            [
                'bestProducts' => $bestProducts,
                'discountProducts' => $discountProducts,
                'maxDiscount' => $maxDiscount,
                'latestProducts' => $latestProducts
            ]
        );
    }
}
