<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoriesController extends Controller
{
    // PAGES METHODS
    public function show_inventory_form() {
        return view('inventories.inventory_form');
    }

    public function show_inventory_list() {
        return view('inventories.inventory_list');
    }


    // CRUD
    public function list() {
        $inventories = Inventory::all();

        return response()->json($inventories);
    }

    public function create(Request $request) {
        $inventory = $request->validate([
            "name"                => 'required|string|max:255',
            "description"         => 'nullable|string',
            "category"            => 'required|string|max:255',
            "location"            => 'nullable|string',
            "people_involved"     => 'nullable|json',
            "historical"          => 'nullable|json',
            "significance"        => 'nullable|json',
            "stages"              => 'nullable|json',
            "materials"           => 'nullable|json',
            "products"            => 'nullable|json',
            "attire"              => 'nullable|json',
            "expressions"         => 'nullable|json',
            "objects"             => 'nullable|json',
            "structure_resources" => 'nullable|json',
            "transmissions"       => 'nullable|json',
            "cultural_assets"     => 'nullable|json',
            "evaluations"         => 'nullable|json',
            "recommendations"     => 'nullable|json'
        ]);
        
        Inventory::create([
            "name"                => $inventory['name'],
            "description"         => $inventory['description'] ?? null,
            "category"            => $inventory['category'],
            "location"            => $inventory['location'] ?? null,
            "people_involved"     => $inventory['people_involved'] ?? null,
            "historical"          => $inventory['historical'] ?? null,
            "significance"        => $inventory['significance'] ?? null,
            "stages"              => $inventory['stages'] ?? null,
            "materials"           => $inventory['materials'] ?? null,
            "products"            => $inventory['products'] ?? null,
            "attire"              => $inventory['attire'] ?? null,
            "expressions"         => $inventory['expressions'] ?? null,
            "objects"             => $inventory['objects'] ?? null,
            "structure_resources" => $inventory['structure_resources'] ?? null,
            "transmissions"       => $inventory['transmissions'] ?? null,
            "cultural_assets"     => $inventory['cultural_assets'] ?? null,
            "evaluations"         => $inventory['evaluations'] ?? null,
            "recommendations"     => $inventory['recommendations'] ?? null
        ]);

        return response()->json([
            "message" => "Inventário criado com sucesso!",
            "inventory" => $inventory
        ], 201);
    }

    public function update(Request $request, $id) {
        $inventory_updated = $request->validate([
            "name"                => 'required|string|max:255',
            "description"         => 'nullable|string',
            "category"            => 'required|string|max:255',
            "location"            => 'nullable|string',
            "people_involved"     => 'nullable|json',
            "historical"          => 'nullable|json',
            "significance"        => 'nullable|json',
            "stages"              => 'nullable|json',
            "materials"           => 'nullable|json',
            "products"            => 'nullable|json',
            "attire"              => 'nullable|json',
            "expressions"         => 'nullable|json',
            "objects"             => 'nullable|json',
            "structure_resources" => 'nullable|json',
            "transmissions"       => 'nullable|json',
            "cultural_assets"     => 'nullable|json',
            "evaluations"         => 'nullable|json',
            "recommendations"     => 'nullable|json'
        ]);

        $inventory = Inventory::findOrFail($id);

        $inventory->update($inventory_updated->all()); 

        return response()->json([
            'message' => 'Inventário atualizado com sucesso!',
            'inventory' => $inventory
        ]);
    }

    public function delete(Request $request, $id) {

        $inventory = Inventory::findOrFail($id);

        $inventory->delete();

        return response()->json([
            'message' => 'Inventário excluido com sucesso!',
            'inventory' => $inventory
        ]);
    }
}
