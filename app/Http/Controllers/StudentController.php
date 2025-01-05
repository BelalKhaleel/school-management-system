<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(15);
        return view('admin.students', ['students' => $students]);
        // return response()->json([
        //     'success' => true,
        //     'students' => Student::all(),
        // ]);
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
        $student = Student::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Student created successfully',
            'student' => $student,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return response()->json([
            'success' => true,
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
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
        $student->update($validated);
        return response()->json([
            'success' => true,
            'message' => 'Student updated successfully',
            'student' => $student,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json([
            'success' => true,
            'message' => 'Student deleted successfully',
        ]);
    }
}
