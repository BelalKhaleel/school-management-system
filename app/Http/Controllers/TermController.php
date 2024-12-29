<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'terms' => Term::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'term' => 'required|string|max:20',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $term = Term::firstOrCreate($validated);
        return response()->json([
            'success' => true,
            'message' => 'Term created successfully',
            'term' => $term,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Term $term)
    {
        return response()->json(['success' => true, 'term' => $term]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Term $term)
    {
        $validated = $request->validate([
            'term' => 'required|string|max:10',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $term->update();
        return response()->json([
            'success' => true,
            'message' => 'Term updated successfully',
            'term' => $term,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Term $term)
    {
        $term->delete();
        return response()->json(['success' => true, 'message' => 'Term deleted successfully']);
    }
}
