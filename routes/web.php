<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PersoController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

/* __________________________________ FRONT ___________________________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/admin', [AdminController::class, 'adminHome'])->name('adminHome');

/* __________________________________ BACK ___________________________________ */

// ---------- ABOUT ----------

// Edit - Update

Route::get('/about/{id}/edit', [PersoController::class, 'edit'])->name('aboutEdit');
Route::put('/about/{id}/update', [PersoController::class, 'update'])->name('aboutUpdate');

// ---------- FACTS ----------

// Create - Store

Route::get('/facts/create', [FactController::class, 'create'])->name('factsCreate');
Route::post('/facts/store', [FactController::class, 'store'])->name('factsStore');

// Edit - Update

Route::get('/facts/{id}/edit', [FactController::class, 'edit'])->name('factsEdit');
Route::put('/facts/{id}/update', [FactController::class, 'update'])->name('factsUpdate');

// Destroy

Route::delete('/facts/{id}/delete', [FactController::class, 'destroy'])->name('factsDestroy');

// ---------- SKILLS ----------

// Edit - Update

Route::get('/skills/{id}/edit', [SkillController::class, 'edit'])->name('skillsEdit');
Route::put('/skills/{id}/update', [SkillController::class, 'update'])->name('skillsUpdate');

// ---------- PORTFOLIO ----------

// Create - Store

Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolioCreate');
Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolioStore');

// Edit - Update

Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolioEdit');
Route::put('/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolioUpdate');

// Destroy

Route::delete('/portfolio/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolioDestroy');

