<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/user-index', [userController::class, 'index'])->name('user-index');
Route::get('/user-create', [userController::class, 'create'])->name('user-create');
Route::get('/user-show/{userPractica}', [userController::class, 'show'])->name('user-show');
Route::post('/user-index', [userController::class, 'store'])->name('user-store');