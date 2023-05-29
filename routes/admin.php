<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdminAuthController;

// // Ruta de login
// Route::get('admin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
// Route::post('admin/login', [AdminAuthController::class, 'login']);
// Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


// // Ruta protegida que requiere autenticación
// Route::middleware('auth')->group(function () {
//     // Ruta de inicio
//     // Resto de las rutas para el panel de administración
//     // ...
// });

// Ruta para descargar un archivo
Route::get('admin/download/{id}', [HomeController::class, 'downloadPdf'])->name('download.pdf');
// Route::post('admin/register', [AdminAuthController::class, 'register'])->name('admin.register');
Route::get('admin', [HomeController::class, 'index'])->name('admin.index');


