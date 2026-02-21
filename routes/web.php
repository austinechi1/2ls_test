<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Homepage - use our new HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

// Gallery route
Route::get('/gallery/{slug}', [GalleryController::class, 'show'])->name('gallery.show');

// 📍 NEW PAGES - Add these lines here
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/new', function () {
    return view('new');
})->name('new');


// Individual gallery pages

Route::get('/portfolio/wedding', function () {
    return view('galleries.wedding');
})->name('portfolio.wedding');

Route::get('/portfolio/portrait', function () {
    return view('galleries.portrait');
})->name('portfolio.portrait');

Route::get('/portfolio/graduation', function () {
    return view('galleries.graduation');
})->name('portfolio.graduation');

Route::get('/portfolio/brand', function () {
    return view('galleries.brand');
})->name('portfolio.brand');

Route::get('/portfolio/maternity', function () {
    return view('galleries.maternity');
})->name('portfolio.maternity');

Route::get('/portfolio/boudoir', function () {
    return view('galleries.boudoir');
})->name('portfolio.boudoir');



// Dashboard (keep this from Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes (keep this from Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes (keep this from Breeze)
require __DIR__.'/auth.php';