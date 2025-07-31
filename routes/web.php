<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RequestFormController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/request-form', [RequestFormController::class, 'show'])->name('request.form');
Route::get('/customer-dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
