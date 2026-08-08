<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;




Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/create', 'create')->name('products.create');
     Route::post('/products', 'store')->name('products.store');
    
    Route::get('/products/list', 'list')->name('products.list');
    Route::get('/products/{product}','show')->name('products.show');
   
    Route::get('/products/{product}/edit', 'edit')->name('products.edit');
    Route::put('/products/{product}', 'update')->name('products.update');
    Route::delete('/products/{product}', 'destroy')->name('products.destroy');
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/about', 'about')->name('home.about');
});
Route::controller(\App\Http\Controllers\Auth\LoginController::class)->group(function () {
    Route::get('/login', 'show_login_form')->name('login');
    Route::post('/login', 'login')->name('login.form');
});
Route::controller(\App\Http\Controllers\Auth\RegisterController::class)->group(function () {
    Route::get('/register', 'show_registration_form')->name('register');
    Route::post('/register', 'register')->name('register.form');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login')->with('success', 'You have been logged out successfully.');
})->name('logout');

