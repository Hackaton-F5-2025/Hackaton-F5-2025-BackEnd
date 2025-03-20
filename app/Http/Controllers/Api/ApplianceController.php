<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Appliance;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    public function index()
    {
        return (response()->json(Appliance::All(), 200));
    }

    public function show(string $id)
    {
        return response()->json(Appliance::find($id), 200);
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|varchar|max:255',
        'description' => 'required|varchar|min:1',
        'model' => 'required|varchar|min:1',
        'brand_id' => 'required|bigint|min:1',
    ]);

    $plane = Appliance::create($validatedData);
    
    return response()->json($plane, 200 ); 
}

    public function update(Request $request, string $id)
{
    
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|min:1',
        'model' => 'required|string|min:1',
        'brand_id' => 'required|bigint|min:1',
    ]);

    
    $plane = Appliance::findOrFail($id);

    
    $plane->update($validatedData);

    
    return response()->json($plane, 200);
}

    public function destroy(string $id)
    {
        Appliance::find($id)->delete();
    }
}
