<?php
use App\Models\Cake;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/menu', function () {
    $cakes = Cake::all();
    return view('layout.menu', compact("cakes"));
})->name('cakes.menu');

Route::get('/contact', function () {
    return view('layout.contact');
})->name('cakes.contact');

Route::get('/build-cake', [HomeController::class, 'create'])->name('cakes.create');
Route::post('/build-cake', [HomeController::class, 'store'])->name('cakes.store');
Route::get('/cakes', [HomeController::class, 'index'])->name('cakes.index');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.addToCart');
Route::patch('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');