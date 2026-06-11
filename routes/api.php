<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::get('/users/me', [UserController::class, 'getMyUser'])->middleware('auth:sanctum');
