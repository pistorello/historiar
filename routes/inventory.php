<?php

use App\Http\Controllers\InventoriesController;

Route::get('/inventory/index', [InventoriesController::class, 'show_inventory_list'])->name('show_inventory_list');
Route::get('/inventory/form', [InventoriesController::class, 'show_inventory_form'])->name('show_inventory_form');

Route::get('/inventory', [InventoriesController::class, 'list'])->name('inventory.list');
Route::post('/inventory', [InventoriesController::class, 'create'])->name('inventory.create');
Route::put('/inventory/{id}', [InventoriesController::class, 'update'])->name('inventory.update');
Route::delete('/inventory/{id}', [InventoriesController::class, 'delete'])->name('inventory.delete');