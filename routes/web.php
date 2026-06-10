<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [App\Http\Controllers\Web\Auth\AuthController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Web\Auth\AuthController::class, 'logout'])->name('logout')
    ->middleware('auth:sanctum');
