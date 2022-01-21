<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class ProductsCatalogueController extends Controller
{
    public function __invoke(Request $request)
    {
        $products = Cache::remember('products', 10, function () {
            return Product::all();
        });

        return view('product-catalogue', [
            'products' => $products
        ]);
    }
}
