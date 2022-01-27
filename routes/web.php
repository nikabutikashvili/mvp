<?php

use App\Http\Controllers\NewsletterController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/product-catalogue', \App\Http\Controllers\ProductsCatalogueController::class)->name('product-catalogue');
    Route::resource('/product', \App\Http\Controllers\Product::class)->name('*', 'product');
    Route::post('/reviews', [\App\Http\Controllers\ReviewController::class, 'store'])->name('reviews');
});

Route::post('newsletter', NewsletterController::class);

Route::get('/test', \App\Http\Controllers\Test::class);

require __DIR__.'/auth.php';
