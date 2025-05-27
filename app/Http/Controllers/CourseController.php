<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(Request $request)
{
    $query = \App\Models\Course::query();

    if ($search = $request->input('search')) {
        $query->where('name', 'like', "%$search%");
    }

    // Optional filter (e.g., by department)
    if ($department = $request->input('department')) {
        $query->where('department', $department);
    }

    $courses = $query->paginate(10);

    return view('courses.index', compact('courses'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('courses.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_name' => 'required|string|max:255',
            'instructor_name' => 'required|string|max:255',
            'student_id' => 'required|exists:students,id',
        ]);

        Course::create($validated);

        return redirect()->route('courses.index')->with('success', 'Course added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $course = Course::with(['student', 'grades.student'])->findOrFail($id);
    return view('courses.show', compact('course'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $students = Student::all();
        return view('courses.edit', compact('course', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
{
    $validated = $request->validate([
        'course_name' => 'required|string|max:255',
        'instructor_name' => 'required|string|max:255',
    ]);

    $course->update($validated);

    return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
