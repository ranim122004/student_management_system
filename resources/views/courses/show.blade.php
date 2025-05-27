@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Course Details Card -->
            <div class="card shadow border-0 mb-4">
                <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-journal-text me-2"></i> Course Details</span>
                    <a href="{{ route('courses.index') }}" class="btn btn-outline-light btn-sm">← Back to Courses</a>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong><i class="bi bi-journal-text me-2"></i>Course Name:</strong> {{ $course->course_name }}
                        </li>
                        <li class="list-group-item">
                            <strong><i class="bi bi-person-badge-fill me-2"></i>Instructor:</strong> {{ $course->instructor_name }}
                        </li>
                        <li class="list-group-item">
                            <strong><i class="bi bi-person-fill me-2"></i>Assigned Student:</strong>
                            {{ $course->student->name ?? 'N/A' }}
                        </li>
                    </ul>

                    <div class="mt-4 text-end">
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">
                            <i class="bi bi-pencil-square me-1"></i> Edit Course
                        </a>
                        <a href="{{ route('courses.index') }}" class="btn btn-secondary ms-2">
                            <i class="bi bi-arrow-left me-1"></i> Back
                        </a>
                    </div>
                </div>
            </div>

            <!-- Grades Section -->
            <div class="card shadow border-0">
                <div class="card-header bg-info text-white fw-bold">
                    <i class="bi bi-bar-chart-fill me-2"></i> Grades for this Course
                </div>
                <div class="card-body">
                    @if($course->grades && $course->grades->count())
                        <table class="table table-bordered text-center mb-0">
                            <thead class="table-light text-uppercase">
                                <tr>
                                    <th>Student</th>
                                    <th>Partial Grade</th>
                                    <th>Final Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($course->grades as $grade)
                                    <tr>
                                        <td>{{ $grade->student->name ?? 'N/A' }}</td>
                                        <td>{{ $grade->partial_grade ?? '—' }}</td>
                                        <td>{{ $grade->final_grade ?? '—' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-muted mb-0">No grades recorded for this course yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
