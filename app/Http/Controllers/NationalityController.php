<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use Illuminate\Http\Request;

class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nationalities = Nationality::all();
        if (!($nationalities->isEmpty())) {
            return response()->json(['success' => true, 'nationalities' => $nationalities]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nationality' => 'required|string|max:23',
        ]);

        Nationality::firstOrCreate($validated);

        return response()->json(['successs' => true, 'message' => 'Nationality added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nationality $nationality)
    {
        return response()->json(['nationality' => $nationality]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nationality $nationality)
    {
        $validated = $request->validate([
            'nationality' => 'required|string|max:23',
        ]);

        $nationality->update($validated);
        return response()->json(['successs' => true, 'message' => 'Nationality updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nationality $nationality)
    {
        $nationality->delete();
        return response()->json(['success' => true, 'message' => 'Nationality deleted successfully']);
    }
}
