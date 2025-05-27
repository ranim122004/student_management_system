@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Header -->
            <div class="bg-primary text-white px-4 py-2 rounded-top d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="bi bi-journal-plus me-2"></i> Add Course
                </h5>
                <a href="{{ route('courses.index') }}" class="btn btn-sm btn-outline-light">
                    ← Back to Dashboard
                </a>
            </div>

            <!-- Form Card -->
            <div class="border border-top-0 rounded-bottom p-4 bg-white shadow-sm">
                <form method="POST" action="{{ route('courses.store') }}">
                    @csrf

                    <!-- Course Name -->
                    <div class="mb-4">
                        <label for="course_name" class="form-label fw-semibold">Course Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-journal-text"></i></span>
                            <input type="text" name="course_name" id="course_name" class="form-control" placeholder="Enter course name" required>
                        </div>
                    </div>

                    <!-- Instructor Name -->
                    <div class="mb-4">
                        <label for="instructor_name" class="form-label fw-semibold">Instructor Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-person-badge-fill"></i></span>
                            <input type="text" name="instructor_name" id="instructor_name" class="form-control" placeholder="Enter instructor name" required>
                        </div>
                    </div>

                    <!-- Student Select -->
                    <div class="mb-4">
                        <label for="student_id" class="form-label fw-semibold">Assign to Student</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-person-fill"></i></span>
                            <select name="student_id" id="student_id" class="form-select" required>
                                <option disabled selected>Select a student</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle me-1"></i> Save Course
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
