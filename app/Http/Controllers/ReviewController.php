<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $inputs = $request->all();
        $user = Auth::user();
        $review = new Review();
        $review->review = $inputs['review'];
        $review->products_id = $inputs['product_id'];
        $review->users_id = $user->id;
        $review->save();

        return Redirect::to('products/'.$inputs['product_id']);
    }
}
