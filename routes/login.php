<?php

use App\Http\Controllers\AuthController;

// REGISTER ROUTES  
Route::get('/register', [AuthController::class, 'show_register_form'])->name('show_register_form');
Route::post('/register', [AuthController::class,'register'])->name('register');

// LOGIN ROUTES
Route::get('/login', [AuthController::class,'show_login_form'])->name('show_login_form');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');