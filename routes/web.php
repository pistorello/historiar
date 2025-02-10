<?php

use Illuminate\Support\Facades\Route;
use App\Models\Inventory;

require base_path('routes/inventory.php');
require base_path('routes/login.php');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $inventories = Inventory::all();

    return view('dashboard', compact('inventories'));    
});