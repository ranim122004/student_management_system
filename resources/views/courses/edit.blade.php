@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-pencil-fill me-2"></i> Edit Course</span>
                    <a href="{{ route('courses.index') }}" class="btn btn-outline-light btn-sm">
                        ← Back to Courses
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')


                        <div class="mb-3">
                            <label for="course_name" class="form-label">Course Name</label>
                            <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $course->course_name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="instructor_name" class="form-label">Instructor Name</label>
                            <input type="text" name="instructor_name" id="instructor_name" class="form-control" value="{{ $course->instructor_name }}" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save me-1"></i> Update Course
                            </button>
                            <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div> <!-- /card-body -->
            </div>
        </div>
    </div>
</div>
@endsection
