<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();
        if (!($languages->isEmpty())) {
            return response()->json([
                'success' => true, 
                'languages' => $languages,
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nationality' => 'required|string|unique|max:11',
        ]);

        Language::firstOrCreate($validated);

        return response()->json(['successs' => true, 'message' => 'Language added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        return response()->json(['language' => $language]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $validated = $request->validate([
            'language' => 'required|string|unique|max:11',
        ]);

        $language->update($validated);
        return response()->json(['successs' => true, 'message' => 'Language updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return response()->json(['message' => 'Language deleted successfully']);
    }
}
