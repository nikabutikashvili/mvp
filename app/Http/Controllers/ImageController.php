<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function store($image, $product_Id)
    {
        $imagePath = $image->store('images');
        $this->image = new Image();
        $this->image->image_url = $imagePath;
        $this->image->products_id = $product_Id;
        $this->image->save();
    }
}
