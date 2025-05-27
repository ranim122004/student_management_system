@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Page Title -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary fs-3">
            <i class="bi bi-list-ol me-2"></i> Grades List
        </h2>
        <a href="{{ route('grades.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle me-1"></i> Add Grade
        </a>
    </div>

    <!-- Table -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-bordered text-center">
                <thead class="table-primary text-uppercase fw-semibold">
                    <tr class="align-middle">
                        <th><i class="bi bi-person-fill"></i> Student</th>
                        <th><i class="bi bi-journal-text"></i> Course</th>
                        <th><i class="bi bi-pencil-square"></i> Partial Grade</th>
                        <th><i class="bi bi-award-fill"></i> Final Grade</th>
                        <th><i class="bi bi-gear-fill"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($grades as $grade)
                        <tr>
                            <td>{{ $grade->student->name ?? 'N/A' }}</td>
                            <td>{{ $grade->course->course_name ?? 'N/A' }}</td>
                            <td>{{ $grade->partial_grade ?? 'N/A' }}</td>
                            <td>{{ $grade->final_grade ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('grades.show', $grade->id) }}" class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this grade?')" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-muted text-center">No grades available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
