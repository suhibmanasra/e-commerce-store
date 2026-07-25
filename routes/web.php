<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
