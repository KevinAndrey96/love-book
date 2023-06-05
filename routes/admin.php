<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Auth;

// Ruta para descargar un archivo
Route::get('admin/download/{id}', [HomeController::class, 'downloadPdf'])->name('download.pdf');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('admin', [HomeController::class, 'index'])->name('admin.index');
});

// Rutas de autenticación proporcionadas por Laravel
Auth::routes();
