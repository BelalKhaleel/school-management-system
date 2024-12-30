<?php

use App\Models\Term;
use App\Models\User;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Language;
use App\Models\Classroom;
use App\Models\Department;
use App\Models\Certificate;
use App\Models\Nationality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources([
    'certificates'=> Certificate::class,
    'classrooms'=> Classroom::class,
    'departments'=> Department::class,
    'grades'=> Grade::class,
    'languages'=> Language::class,
    'nationalities'=> Nationality::class,
    'sections'=> Section::class,
    'students'=> Student::class,
    'subjects'=> Subject::class,
    'teachers'=> Teacher::class,
    'terms'=> Term::class,
    'users'=> User::class,
]);
