<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PersoController;
use Illuminate\Support\Facades\Route;

/* ____________________ FRONT ____________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/admin', [AdminController::class, 'adminHome'])->name('adminHome');

// CRUD

// ABOUT

// Edit - Update

Route::get('/about/{id}/edit', [PersoController::class, 'edit'])->name('aboutEdit');
Route::put('/about/{id}/update', [PersoController::class, 'update'])->name('aboutUpdate');

// FACTS

// Edit - Update

Route::get('/facts/{id}/edit', [FactController::class, 'edit'])->name('factsEdit');
Route::put('/facts/{id}/update', [FactController::class, 'update'])->name('factsUpdate');
