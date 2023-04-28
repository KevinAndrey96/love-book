<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AvatarController;


Route::get('/Books', [BookController::class, 'index']);

Route::get('/Avatar', [AvatarController::class, 'avatar']);

Route::get('/Avatar/Male', [AvatarController::class, 'avatarMale']);

Route::get('/Avatar/Female', [AvatarController::class, 'avatarFemale']);

Route::get('/FrontPage', [BookController::class, 'bookFrontPage']);

Route::get('/BookPages', [BookController::class, 'bookPages']);


