<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'sections' => Section::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'section' => 'required|string|unique|max:20',
        ]);

        $section = Section::firstOrCreate($validated);
        return response()->json([
            'success' => true,
            'message' => 'section created successfully',
            'section' => $section,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        return response()->json(['section' => $section]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        $validated = $request->validate([
            'section' => 'required|string|unique|max:20',
        ]);
        
        $section->update($validated);
        return response()->json([
            'success' => true,
            'message' => 'section updated successfully',
            'section' => $section,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return response()->json(['success' => true, 'Section deleted successfully']);
    }
}
