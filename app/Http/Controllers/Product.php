<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Product extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();

        $product = new \App\Models\Product();
        $product->name = $inputs['name'];
        $product->description = $inputs['description'];
        $product->price = $inputs['price'];
        $product->save();
        $productId = $product->id;

         if($request->file('image'))   {
             $image = new ImageController();
             $image->store($request->file('image'), $productId);
         }
        return Redirect::to('product-catalogue');
    }

    public function show($id)
    {
        $product = \App\Models\Product::find($id);
        $reviews = Review::where('products_id', $id)->get();
        $image = Image::where('products_id', $id)->first();

        return view('product.show', [
            'product' => $product,
            'reviews' => $reviews,
            'image'   => $image,
        ]);
    }

    public function edit($id)
    {
        $product = \App\Models\Product::find($id);

        return view('product.edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $inputs = $request->all();

        $product = new \App\Models\Product();
        $product = \App\Models\Product::find($id);
        $product->name = $inputs['name'];
        $product->description = $inputs['description'];
        $product->price = $inputs['price'];
        $product->save();

        return Redirect::to('product-catalogue');
    }

    public function destroy($id)
    {
        //
    }
}
