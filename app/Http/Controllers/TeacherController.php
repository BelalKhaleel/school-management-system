<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gender;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Classroom;
use App\Models\Nationality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = User::role('teacher')->paginate(15);
        return view('admin.teachers', ['teachers' => $teachers]);
        // return response()->json([
        //     'success' => true,
        //     'teachers' => Teacher::all(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::all();
        $nationalities = Nationality::all();
        $classrooms = Classroom::all();
        $subjects = Subject::all();
        return view(
            'partials.teacher-form',
            [
                'genders' => $genders,
                'nationalities' => $nationalities,
                'classrooms' => $classrooms,
                'subjects' => $subjects,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            "father_name" => 'required|string|max:30',
            "mother_name" => 'required|string|max:30',
            'phone_number' => 'required|string|max:15',
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
            'classroom_ids' => 'required|array',
            'classroom_ids.*' => 'integer|exists:classrooms,id',
            'subject_ids' => 'required|array',
            'subject_ids.*' => 'integer|exists:subjects,id',
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $classrooms_ids = $validated['classroom_ids'];
        sort($classrooms_ids);
        unset($validated['classroom_ids']);
        $subjects_ids = $validated['subject_ids'];
        sort($subjects_ids);
        unset($validated['subject_ids']);
        $teacher = User::create($validated);
        $teacher->assignRole('teacher');
        foreach ($classrooms_ids as $classroom_id) {
            DB::table('classroom_teacher')->insert([
                'classroom_id' => $classroom_id,
                'teacher_id' => $teacher->id,
            ]);
        }
        foreach ($subjects_ids as $subject_id) {
            DB::table('subject_teacher')->insert([
                'subject_id' => $subject_id,
                'teacher_id' => $teacher->id,
            ]);
        }
        return to_route('teachers.index');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Teacher created successfully',
        //     'teacher' => $teacher,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $teacher)
    {
        $class_ids = DB::table('classroom_teacher')
            ->where('teacher_id', '=', $teacher->id)
            ->pluck('classroom_id');
        $classes = DB::table('classrooms')
            ->whereIn('id', $class_ids)
            ->pluck('room_number')
            ->toArray();
        $subject_ids = DB::table('subject_teacher')
            ->where('teacher_id', '=', $teacher->id)
            ->pluck('subject_id');
        $subjects = DB::table('subjects')
            ->whereIn('id', $subject_ids)
            ->pluck('subject')
            ->toArray();
        return view(
            'admin.teacher',
            [
                'teacher' => $teacher,
                'classes' => $classes,
                'subjects' => $subjects,
            ]
        );
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
    public function destroy(User $teacher)
    {
        if(User::role('teacher')) {
            $teacher->delete();
            return to_route('teachers.index')->with(['delete-successfully' => 'Teacher deleted successfully']);
        } else {
            return redirect()->back();
        }
    }
}
