<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentDashboardController;
use Illuminate\Support\Facades\Route;


// Public landing page
Route::get('/', function () {
    return view('landing');
});

// Default dashboard for admin/teacher
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Student dashboard route (role-based)
Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('student.dashboard');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Students
    Route::resource('students', StudentController::class);

    // Student assigned courses
    Route::get('/students/{student}/courses', [StudentController::class, 'courses'])->name('students.courses');

    // Courses
    Route::resource('courses', CourseController::class);

    // Grades
    Route::resource('grades', GradeController::class);
});

require __DIR__.'/auth.php';
