<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

// Redirect root to profile
Route::get('/', fn() => redirect('/profile'));

require __DIR__ . '/auth.php';

// Authenticated and verified routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::resource('/cliente', ClienteController::class);
});

// Authenticated profile and ticket routes
Route::middleware('auth')->group(function () {
    Route::prefix('profile')->as('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});
