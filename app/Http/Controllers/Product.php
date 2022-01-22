<?php

namespace App\Http\Controllers;

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

        return Redirect::to('product-catalogue');
    }


    public function show($id)
    {
        $product = \App\Models\Product::find($id);
        return view('product.show', [
            'product' => $product
        ]);
    }


    public function edit($id)
    {
        $product = \App\Models\Product::find($id);
        return view('product.edit',  [
            'product' => $product
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
