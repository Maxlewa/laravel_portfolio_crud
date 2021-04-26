<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PersoController;
use Illuminate\Support\Facades\Route;

/* ____________________ FRONT ____________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/admin', [AdminController::class, 'adminHome'])->name('adminHome');

// CRUD

// ABOUT

// Show

Route::get('/about/{id}', [PersoController::class, 'show'])->name('aboutShow');

// Edit - Update

Route::get('/about/{id}/edit', [PersoController::class, 'edit'])->name('aboutEdit');
Route::put('/about/{id}/update', [PersoController::class, 'update'])->name('aboutUpdate');
