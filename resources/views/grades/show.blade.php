@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-bar-chart-fill me-2"></i> Grade Details</span>
                    <a href="{{ route('grades.index') }}" class="btn btn-outline-light btn-sm">← Back to Grades</a>
                </div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong><i class="bi bi-person-fill me-2"></i>Student:</strong> {{ $grade->student->name ?? 'N/A' }}
                        </li>
                        <li class="list-group-item">
                            <strong><i class="bi bi-journal-text me-2"></i>Course:</strong> {{ $grade->course->course_name ?? 'N/A' }}
                        </li>
                        <li class="list-group-item">
                            <strong><i class="bi bi-percent me-2"></i>Partial Grade:</strong> {{ $grade->partial_grade ?? '—' }}
                        </li>
                        <li class="list-group-item">
                            <strong><i class="bi bi-award-fill me-2"></i>Final Grade:</strong> {{ $grade->final_grade ?? '—' }}
                        </li>
                    </ul>

                    <div class="mt-4 text-end">
                        <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning me-2">
                            <i class="bi bi-pencil-square me-1"></i> Edit
                        </a>
                        <a href="{{ route('grades.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-1"></i> Back
                        </a>
                    </div>
                </div> <!-- /card-body -->
            </div>
        </div>
    </div>
</div>
@endsection
