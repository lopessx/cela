<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/product', [ProductController::class, 'list'])->name('product');
    Route::get('/product/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/product/add', [ProductController::class, 'store'])->name('product.add');
    Route::delete('/product', [ProductController::class, 'delete'])->name('product.destroy');

    Route::get('/category', [CategoryController::class, 'list'])->name('category');
    Route::get('/category/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category/add', [CategoryController::class, 'store'])->name('category.add');
    Route::delete('/category', [CategoryController::class, 'delete'])->name('category.destroy');
});

require __DIR__.'/auth.php';
