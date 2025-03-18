<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\ProfileController;

Route::get('/generate-admin', [AuthController::class, 'generateAdmin'])->name('generate.admin');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [StagiaireController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('update.profile');

    Route::get('/stagiaire/ajouter', [StagiaireController::class, 'create'])->name('stagiaire.create');
    Route::post('/stagiaire/store', [StagiaireController::class, 'store'])->name('stagiaire.store');
});