<?php

use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckOutController;
use App\Http\Controllers\frontend\ComfirmController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\InvoiceController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ProductDetailController;
use App\Http\Controllers\frontend\SellController;
use App\Http\Controllers\frontend\TrackingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Frontend Block

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart');
});

Route::controller(CheckOutController::class)->group(function () {
    Route::get('/checkout', 'index')->name('checkout');
});

Route::controller(ComfirmController::class)->group(function () {
    Route::get('/comfirm', 'index')->name('comfirm');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'index')->name('product');
});

Route::controller(ProductDetailController::class)->group(function () {
    Route::get('/productDetail', 'index')->name('productDetail');
});

Route::controller(SellController::class)->group(function () {
    Route::get('/sell', 'index')->name('sell');
});

Route::controller(TrackingController::class)->group(function () {
    Route::get('/tracking', 'index')->name('tracking');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
});


Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
});

Route::get('/invoice', function () {
    return view('frontend.invoice'); // or use a controller if dynamic later
})->name('invoice');
