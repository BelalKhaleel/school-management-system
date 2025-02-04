<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function() {
    return redirect('/');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('/students', StudentController::class);
    Route::resource('/teachers', TeacherController::class);
});