<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CadastrarTrilhaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cadastrarTrilha', function () {
    return view('cadastrarTrilha');
})->middleware(['auth', 'verified'])->name('cadastrarTrilha');

Route::post('/cadastrarTrilha', [CadastrarTrilhaController::class, 'salvar'])->middleware(['auth', 'verified'])->name('cadastrarTrilha');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
