<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::group(['prefix' => 'products'], function () {
    Route::get('', [ProductController::class, 'index'])->name('products');
    Route::get('/forklift', [ProductController::class, 'forklift'])->name('products.forklift');
    Route::get('/dump-truck', [ProductController::class, 'dumpTruck'])->name('products.dumpTruck');
    Route::get('/light-truck', [ProductController::class, 'lightTruck'])->name('products.lightTruck');
    Route::get('/tronton', [ProductController::class, 'tronton'])->name('products.tronton');
});
// Route::get('/services', [ServiceController::class, 'index'])->name('services');
// Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::fallback(function () {
    return view('pages.errors-404');
});
