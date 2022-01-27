<?php

namespace App\Http\Controllers;

use App\Services\NewsLetter;

class NewsletterController extends Controller
{
    public function __invoke(NewsLetter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            return redirect('/products')
                    ->with('error', 'This email could not be added to our newsletter list');
        }

        return redirect('/products')
                ->with('success', 'You are now signed up for our newsletter');
    }
}
