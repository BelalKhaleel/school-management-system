<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'certificates' => Certificate::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'certificate' => 'required|string|unique|max:20',
        ]);

        $certificate = Certificate::firstOrCreate($validated);
        return response()->json([
            'success' => true,
            'message' => 'Certificate created successfully',
            'certificate' => $certificate,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        return response()->json(['certificate' => $certificate]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        $validated = $request->validate([
            'certificate' => 'required|string|unique|max:20',
        ]);
        
        $certificate->update($validated);
        return response()->json([
            'success' => true,
            'message' => 'Certificate updated successfully',
            'certificate' => $certificate,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
        return response()->json(['success' => true, 'Certificate deleted successfully']);
    }
}
