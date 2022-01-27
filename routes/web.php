<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('products/{id}', [ProductController::class, 'show'])->name('show-products');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/products/create', [ProductController::class, 'create'])->name('create-product');
    Route::post('admin/products/store', [ProductController::class, 'store'])->name('store-product');
    Route::get('admin/products/{id}/edit', [ProductController::class, 'edit'])->name('edit-product');
    Route::put('admin/products/{id}/update', [ProductController::class, 'update'])->name('update-product');
});

Route::post('newsletter', NewsletterController::class);

Route::get('/test', Test::class);

require __DIR__.'/auth.php';
