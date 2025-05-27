@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-pencil-fill me-2"></i> Edit Grade</span>
                    <a href="{{ route('grades.index') }}" class="btn btn-outline-light btn-sm">← Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('grades.update', $grade->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Student</label>
                            <input type="text" class="form-control" value="{{ $grade->student->name }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Course</label>
                            <input type="text" class="form-control" value="{{ $grade->course->course_name }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Partial Grade</label>
                            <input type="number" name="partial_grade" class="form-control" value="{{ $grade->partial_grade }}" min="0" max="100">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Final Grade</label>
                            <input type="number" name="final_grade" class="form-control" value="{{ $grade->final_grade }}" min="0" max="100">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle me-1"></i> Update Grade
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
