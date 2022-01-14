<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsCatalogueController extends Controller
{
    public function __invoke(Request $request)
    {
        $products = Product::all();
        return view('product-catalogue', [
            'products' => $products
        ]);
    }
}
