@extends('layouts.app')

@section('content')
<div class="container py-5 d-flex justify-content-center">
    <div class="col-lg-10">
        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="d-flex align-items-center">
                <i class="bi bi-journal-bookmark-fill text-primary fs-2 me-3"></i>
                <h2 class="mb-0 fw-bold text-primary">Course List</h2>
            </div>
            <a href="{{ route('courses.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-1"></i> Add Course
            </a>
        </div>

        <!-- Courses Table -->
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <table class="table table-hover table-bordered mb-0 text-center">
                    <thead class="table-primary text-uppercase fw-semibold">
                        <tr>
                            <th><i class="bi bi-journal-text"></i> Course Name</th>
                            <th><i class="bi bi-person-badge-fill"></i> Instructor</th>
                            <th><i class="bi bi-person-fill"></i> Student</th>
                            <th><i class="bi bi-gear-fill"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td>{{ $course->course_name }}</td>
                                <td>{{ $course->instructor_name }}</td>
                                <td>{{ $course->student->name ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm me-1">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete this course?')" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No courses available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
