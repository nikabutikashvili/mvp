<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products = Cache::remember('products', 10, function () {
            return Product::all();
        });

        return view('products.index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();

        $product = new Product();
        $product->name = $inputs['name'];
        $product->description = $inputs['description'];
        $product->price = $inputs['price'];
        $product->save();
        $productId = $product->id;

        if ($request->file('image')) {
            $image = new ImageController();
            $image->store($request->file('image'), $productId);
        }

        return Redirect::to('products');
    }

    public function show($id)
    {
        $product = Product::find($id);
        $image = Image::where('products_id', $id)->first();
        return view('products.show', [
            'product' => $product,
            'image'   => $image,
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $inputs = $request->all();

        $product = new Product();
        $product = Product::find($id);
        $product->name = $inputs['name'];
        $product->description = $inputs['description'];
        $product->price = $inputs['price'];
        $product->save();

        return Redirect::to('products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id, 'id');
        $product->delete();

        return Redirect::to('products');
    }
}
