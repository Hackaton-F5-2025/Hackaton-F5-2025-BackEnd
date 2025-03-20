<?php

namespace App\Http\Controllers\Api;

use App\Models\Replacement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ReplacementController extends Controller
{
    public function index()
    {
        return response()->json(Replacement::all(), 200);
    }

    public function show(string $id)
    {
        return response()->json(Replacement::find($id), 200);
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'image_url' => 'required|url',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'state' => 'required|string|max:50',
        ]);
        

        
        $replacement = Replacement::create($validatedData);


        return response()->json($replacement, 200); 
    }

    public function update(Request $request, string $id)
{
    
    $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'image_url' => 'required|url',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'state' => 'required|string|max:50',
    ]);

    
    $replacement = Replacement::findOrFail($id);

    
    $replacement->update($validatedData);

    
    return response()->json($replacement, 200);
}

    public function destroy(string $id)
    {

        Replacement::find($id)->delete();
    }
}