<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Make sure the authenticated user is a student
        if ($user->role !== 'student') {
            abort(403, 'Unauthorized access');
        }

        // Fetch only this student's courses (assuming `student_id` is used)
        $courses = Course::where('student_id', $user->id)->get();

        return view('students.dashboard', compact('courses'));
    }
}
