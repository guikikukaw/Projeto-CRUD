<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::resource('games', GameController::class);
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);