@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="fw-bold text-primary mb-4">
        <i class="bi bi-book-fill me-2"></i>Courses for {{ $student->name }}
    </h3>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-bordered text-center">
                <thead class="table-primary text-uppercase fw-semibold">
                    <tr>
                        <th>Course Name</th>
                        <th>Instructor</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->instructor_name }}</td>
                            <td>
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-muted">No courses assigned to this student.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
