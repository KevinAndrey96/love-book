<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AvatarController;

Route::get('/', function () {
    return view('Books.index');
});

Route::get('/avatar', [AvatarController::class, 'avatar']);

Route::get('/avatar-male', [AvatarController::class, 'avatarMale']);

Route::get('/avatar-female', [AvatarController::class, 'avatarFemale']);

Route::get('/front-page', [BookController::class, 'bookFrontPage']);

Route::get('/books-pages', [BookController::class, 'bookPages']);

Route::get('/books-pdf', [BookController::class, 'booksPDF']);


Route::get('/form', [BookController::class, 'Form']);


Route::post('/guardar-libro', [BookController::class, 'guardarDatos']);











