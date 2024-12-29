<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'classes' => Classroom::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'language_id' => 'required|integer|max_digits:1',
            'certificate_id' => 'required|integer|max_digits:2',
            'department_id' => 'required|integer|max_digits:1',
            'section_id' => 'required|integer|max_digits:1',
            'room_number' => 'required|integer|unique|max_digits:2',
            'number_of_students' => 'required|integer|max_digits:2',
            'max_number_of_students' => 'required|integer|max_digits:2',
            'school_year' => 'required|string|max:11',
        ]);
        $classroom = Classroom::firstOrCreate($validated);
        return response()->json([
            'success' => true,
            'message' => 'Class created successfully',
            'class' => $classroom,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Classroom $classroom)
    {
        return response()->json([
            'success' => true,
            'class' => $classroom,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classroom $classroom)
    {
        $validated = $request->validate([
            'language_id' => 'required|integer|max_digits:1',
            'certificate_id' => 'required|integer|max_digits:2',
            'department_id' => 'required|integer|max_digits:1',
            'section_id' => 'required|integer|max_digits:1',
            'room_number' => 'required|integer|unique|max_digits:2',
            'number_of_students' => 'required|integer|max_digits:2',
            'max_number_of_students' => 'required|integer|max_digits:2',
            'school_year' => 'required|string|max:11',
        ]);
        $classroom->update($validated);
        return response()->json([
            'success' => true,
            'message' => 'Class updated successfully',
            'class' => $classroom,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return response()->json([
            'success' => true,
            'message' => 'Classroom deleted successfully',
        ]);
    }
}
