<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FireExtinguisher;

class ExtinguisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ExtDisplay()
    {
        return view('admin/extinguisher');
    }
    public function AddFire()
    {
        return view('admin.Addnew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Type' => 'required|string',
            'Name' => 'required|string',
            'SerialNumber' => 'required|string',
            'Location' => 'required|string',
            'InstallationDate' => 'required|date',
            'ExpirationDate' => 'required|date',
            'InspectionFindings' => 'required|string',
            'Status' => 'required|string',
        ]);
    
        // Assuming you have an Eloquent model named 'Extinguisher' for your database
        $extinguisher = FireExtinguisher::create([
            'Type' => $request->input('Type'),
            'Name' => $request->input('Name'),
            'SerialNumber' => $request->input('SerialNumber'),
            'Location' => $request->input('Location'),
            'InstallationDate' => $request->input('InstallationDate'),
            'ExpirationDate' => $request->input('ExpirationDate'),
            'InspectionFindings' => $request->input('InspectionFindings'),
            'Status' => $request->input('Status'),
            
        ]);
        
      
    
        return redirect()->route('admin/extinguisher')->with('success', 'Extinguisher added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         // Fetch all extinguishers from the database
    $extinguishers = FireExtinguisher::all();

    // Pass the extinguishers data to the view
    return view('admin.extinguisher')->with('extinguishers', $extinguishers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
