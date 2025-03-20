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
        'name' => 'required|string|max:255',
        'description' => 'required|string|min:1',
        'model' => 'required|string|min:1',
        'brand_id' => 'required|integer|min:1',
    ]);
    

    $liance = Appliance::create($validatedData);
    
    return response()->json($liance, 200 ); 
}

    public function update(Request $request, string $id)
{
    
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|min:1',
        'model' => 'required|string|min:1',
        'brand_id' => 'required|integer|min:1',
    ]);

    
    $liance = Appliance::findOrFail($id);

    
    $liance->update($validatedData);

    
    return response()->json($liance, 200);
}

    public function destroy(string $id)
    {
        Appliance::find($id)->delete();
    }
}
