<?php

use Illuminate\Support\Facades\Route;
use App\Models\Inventory;
use App\Models\User;

require base_path('routes/inventory.php');
require base_path('routes/login.php');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $inventories = Inventory::all();
    $recent_inventories = Inventory::orderBy('created_at', 'desc')->take(5)->get();
    $users = User::all();
    $recent_users = User::orderBy('created_at', 'desc')->take(5)->get();

    return view('dashboard', compact('inventories', 'users', 'recent_inventories', 'recent_users'));    
});