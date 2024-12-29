<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'departments' => Department::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'department' => 'required|string|unique|max:20',
            'code' => 'required|string|unique|max:5',
            'certificate_id' => 'required|integer',
        ]);
        $department = Department::firstOrCreate($validated);
        return response()->json([
            'success' => true,
            'message' => 'Department created successfully',
            'department' => $department,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return response()->json([
            'success' => true,
            'department' => $department,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $validated = $request->validate([
            'department' => 'required|string|unique|max:20',
            'code' => 'required|string|unique|max:5',
            'certificate_id' => 'required|integer',
        ]);
        $department->update($validated);
        return response()->json([
            'success' => true,
            'message' => 'Department updated successfully',
            'department' => $department,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return response()->json([
            'success' => true,
            'message' => 'Department deleted successfully',
        ]);
    }
}
