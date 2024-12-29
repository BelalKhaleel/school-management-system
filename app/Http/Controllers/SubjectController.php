<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'subjects' => Subject::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|unique|max:20',
        ]);

        $subject = Subject::firstOrCreate($validated);
        return response()->json([
            'success' => true,
            'message' => 'subject created successfully',
            'subject' => $subject,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return response()->json(['subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $validated = $request->validate([
            'subject' => 'required|string|unique|max:20',
        ]);
        
        $subject->update($validated);
        return response()->json([
            'success' => true,
            'message' => 'subject updated successfully',
            'subject' => $subject,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return response()->json(['success' => true, 'Subject deleted successfully']);
    }
}
