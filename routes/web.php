<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\PageController;

// frontend routes
Route::as('front.')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('shop', [PageController::class, 'shop'])->name('shop');
    Route::get('product/{slug}', [PageController::class, 'singleProduct'])->name('shop.single');

    // add to cart
    Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('cart.store');
    // Load Cookie Data
    Route::get('load-cookie-data', [CartController::class, 'loadCookieData'])->name('cart.load');

    // Cart Page
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    
    // remove from cart
    Route::delete('remove-from-cart', [CartController::class, 'removeCartItem'])->name('cart.remove');
});


// backend routes
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    // Slider
    Route::get('slider', [SliderController::class, 'index'])->name('slider.index');
    Route::match(['get', 'post'], 'slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::match(['get', 'put'], 'slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::delete('slider/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');

    // Category
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::match(['get', 'post'], 'category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::match(['get', 'put'], 'category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::delete('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    // Product
    Route::get('product', [ProductController::class, 'index'])->name('product.index');
    Route::match(['get', 'post'], 'product/create', [ProductController::class, 'create'])->name('product.create');
    Route::match(['get', 'put'], 'product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::delete('product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
