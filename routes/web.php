<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubirController;
use App\Http\Controllers\ImageController;

Route::get('/', [SubirController::class, 'index'])->name('subir.index');
Route::get('/subir/{id}', [SubirController::class, 'show'])->name('subir.show');
Route::get('/create', [SubirController::class, 'create'])->name('subir.create');
Route::post('/subir', [SubirController::class, 'store'])->name('subir.store');
Route::get('imagenes/{filename}', [ImageController::class, 'show'])->name('imagenes.show');