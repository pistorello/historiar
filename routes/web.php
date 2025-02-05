<?php

use Illuminate\Support\Facades\Route;

require base_path('routes/inventory.php');
require base_path('routes/login.php');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');    
});