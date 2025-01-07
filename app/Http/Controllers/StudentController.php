<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\User;
use App\Models\Gender;
use App\Models\Nationality;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::role('student')->paginate(15);
        return view('admin.students', ['students' => $students]);
        // return response()->json([
        //     'success' => true,
        //     'students' => Student::all(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::all();
        $nationalities = Nationality::all();
        $classrooms = Classroom::whereColumn('number_of_students', '<', 'max_number_of_students')->get();
        return view('partials.student-form', ['genders' => $genders, 'nationalities' => $nationalities, 'classrooms' => $classrooms]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'father_name' => 'required|string|max:30',
            'mother_name' => 'required|string|max:30',
            'phone_number' => 'required|string|unique:users,phone_number|max:10',
            'address' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'password' => Password::min(8)
                            ->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols(),
            'gender_id' => 'required|integer|exists:genders,id',
            'nationality_id' => 'required|integer|exists:nationalities,id',
            'classroom_id' => 'required|integer|exists:classrooms,id',
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $class = Classroom::find($validated['classroom_id']);
        if($class->number_of_students < $class->max_number_of_students) {
            $class->update([
                    'number_of_students' => $class->number_of_students + 1,
                ]);
            $student = User::create($validated);
            $student->assignRole('student');
            return to_route('students.index')->with(['success' => 'Student added successfully']);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $student)
    {
        return view('admin.student', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $student)
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
        $student->assignRole('student');
        return response()->json([
            'success' => true,
            'message' => 'Student updated successfully',
            'student' => $student,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $student)
    {
        if(User::role('student')) {
            $student->delete();
            return response()->json([
                'success' => true,
                'message' => 'Student deleted successfully',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'The deleted user is not a student',
            ]);
        }
    }
}
