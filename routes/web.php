<?php

use App\Http\Controllers\AddTechnicianController;
use App\Http\Controllers\TechnicianDBController;
use App\Http\Controllers\AdminDBController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RequestFormController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/request-form', [CustomerController::class, 'index'])->name('request.form');
Route::get('/customer-dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
Route::get('/admin-db', [AdminDBController::class, 'index'])->name('admin.db');
Route::get('/add-technician', [AddTechnicianController::class, 'index'])->name('add.technician');
Route::get('/technician-db', [TechnicianDBController::class, 'index'])
    ->name('technician.db');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
