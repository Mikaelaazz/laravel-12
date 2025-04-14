<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarboyController;

Route::get('/starboys', [StarboyController::class, 'index'])->name('starboys.index');
Route::get('/starboys/create', [StarboyController::class, 'create'])->name('starboys.create');
Route::post('/starboys', [StarboyController::class, 'store'])->name('starboys.store');
Route::get('/starboys/{starboy}', [StarboyController::class, 'show'])->name('starboys.show');
Route::get('/starboys/{starboy}/edit', [StarboyController::class, 'edit'])->name('starboys.edit');
Route::put('/starboys/{starboy}', [StarboyController::class, 'update'])->name('starboys.update');
Route::delete('/starboys/{starboy}', [StarboyController::class, 'destroy'])->name('starboys.destroy');

