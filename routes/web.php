<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// frontend routes
Route::as('front.')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('home');
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

});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
