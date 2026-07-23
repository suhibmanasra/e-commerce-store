<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
