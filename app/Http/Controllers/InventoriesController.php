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
        $inventories = Inventory::all();

        return view('inventories.inventory_list', compact('inventories'));
    }


    // CRUD
    public function list(Request $request) {
        $inventories = Inventory::all();

        return response()->json($inventories);
    }

    public function create(Request $request) {
        $inventory = $request->validate([
            "name"                => 'required|string|max:255',
            "description"         => 'nullable|string',
            "category"            => 'required|string|max:255',
            "sub_category"        => 'required|string|max:255',
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
            "sub_category"        => $inventory['sub_category'],
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


        response()->json([
            'message' => 'Inventario criado com sucesso!',
            'inventory' => $inventory
        ]);

        return redirect()->route('show_inventory_list');
    }

    public function update(Request $request, $id) {
        $inventory_updated = $request->validate([
            "name"                => 'required|string|max:255',
            "description"         => 'nullable|string',
            "category"            => 'required|string|max:255',
            "sub_category"        => 'required|string|max:255',
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

        response()->json([
            'message' => 'Inventario atualizado com sucesso!',
            'inventory' => $inventory
        ]);

        return redirect()->route('show_inventory_list');
    }

    public function delete(Request $request, $id) {

        $inventory = Inventory::findOrFail($id);

        $inventory->delete();

        response()->json([
            'message' => 'Inventario excluido com sucesso!',
            'inventory' => $inventory
        ]);

        return redirect()->route('show_inventory_list');
    }
}
