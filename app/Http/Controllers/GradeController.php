<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the grades.
     */
    public function index()
    {
        $grades = Grade::with(['student', 'course'])->get();
        return view('grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new grade.
     */
    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('grades.create', compact('students', 'courses'));
    }

    /**
     * Store a newly created grade in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id'     => 'required|exists:students,id',
            'course_id'      => 'required|exists:courses,id',
            'partial_grade'  => 'nullable|numeric|min:0|max:100',
            'final_grade'    => 'nullable|numeric|min:0|max:100',
        ]);

        Grade::create($validated);

        return redirect()->route('grades.index')->with('success', 'Grade recorded successfully.');
    }

    /**
     * Display the specified grade.
     */
    public function show(Grade $grade)
    {
        $grade->load(['student', 'course']);
        return view('grades.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified grade.
     */
    public function edit(Grade $grade)
    {
        $students = Student::all();
        $courses = Course::all();
        return view('grades.edit', compact('grade', 'students', 'courses'));
    }

    /**
     * Update the specified grade in storage.
     */
    public function update(Request $request, Grade $grade)
{
    $validated = $request->validate([
        'partial_grade' => 'nullable|numeric|min:0|max:100',
        'final_grade' => 'nullable|numeric|min:0|max:100',
    ]);

    $grade->update($validated);

    return redirect()->route('grades.index')->with('success', 'Grade updated successfully.');
}

    /**
     * Remove the specified grade from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully.');
    }
}
