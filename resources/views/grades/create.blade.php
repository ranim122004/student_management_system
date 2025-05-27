@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-journal-check me-2"></i> Add Grade</span>
                    <a href="{{ route('grades.index') }}" class="btn btn-outline-light btn-sm">← Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('grades.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Select Student</label>
                            <select name="student_id" class="form-select" required>
                                <option value="">-- Choose Student --</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Course</label>
                            <select name="course_id" class="form-select" required>
                                <option value="">-- Choose Course --</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Partial Grade</label>
                            <input type="number" name="partial_grade" class="form-control" min="0" max="100">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Final Grade</label>
                            <input type="number" name="final_grade" class="form-control" min="0" max="100">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save me-1"></i> Save Grade
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
