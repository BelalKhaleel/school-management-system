<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'teachers' => Teacher::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            "father's_name" => 'required|string|max:30',
            "mother's_name" => 'required|string|max:30',
            'phone_number' => 'required|string|max:10',
            'address' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
            'password' => Password::min(8)
                            ->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols()
                            ->uncompromised(3),
            'gender_id' => 'required|integer|max_digits:1',
            'nationality_id' => 'required|integer|max_digits:2',
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $teacher = Teacher::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Teacher created successfully',
            'teacher' => $teacher,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return response()->json([
            'success' => true,
            'student' => $teacher,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            "father's_name" => 'required|string|max:30',
            "mother's_name" => 'required|string|max:30',
            'phone_number' => 'required|string|max:10',
            'address' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
            'password' => Password::min(8)
                            ->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols()
                            ->uncompromised(3),
            'gender_id' => 'required|integer|max_digits:1',
            'nationality_id' => 'required|integer|max_digits:2',
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $teacher->update($validated);
        return response()->json([
            'success' => true,
            'message' => 'Teacher updated successfully',
            'teacher' => $teacher,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return response()->json([
            'success' => true,
            'message' => 'Teacher deleted successfully',
        ]);
    }
}
