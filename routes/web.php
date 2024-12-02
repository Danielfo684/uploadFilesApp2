<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubirController;
use App\Http\Controllers\ImageController;

Route::get('/', [SubirController::class, 'index'])->name('subir.index');
Route::get('/subir/{id}', [SubirController::class, 'show'])->name('subir.show');
Route::get('/create', [SubirController::class, 'create'])->name('subir.create');
Route::post('/subir', [SubirController::class, 'store'])->name('subir.store');
Route::get('imagen/{filename}', [SubirController::class, 'view'])->name('imagenes.view');
Route::delete('/subir/{id}', [SubirController::class, 'destroy'])->name('subir.destroy');