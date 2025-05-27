@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Page Title and Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary fs-3">
            <i class="bi bi-people-fill me-2"></i> Student List
        </h2>
        <a href="{{ route('students.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle me-1"></i> Add Student
        </a>
    </div>

    <!-- Search Form Only (Class filter removed) -->
    <form method="GET" action="{{ route('students.index') }}" class="row g-3 mb-4">
        <div class="col-md-8">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by name or email">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-outline-primary w-100">
                <i class="bi bi-search me-1"></i> Search
            </button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary w-100">
                <i class="bi bi-arrow-clockwise me-1"></i> Reset
            </a>
        </div>
    </form>

    <!-- Table -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-bordered table-hover text-center mb-0">
                <thead class="table-primary text-uppercase fw-semibold">
                    <tr class="align-middle">
                        <th><i class="bi bi-person-fill"></i> Name</th>
                        <th><i class="bi bi-envelope-fill"></i> Email</th>
                        <th><i class="bi bi-calendar3"></i> DOB</th>
                        <th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                        <th><i class="bi bi-telephone-fill"></i> Phone</th>
                        <th><i class="bi bi-geo-alt-fill"></i> Address</th>
                        <th><i class="bi bi-gear-fill"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ ucfirst($student->gender) }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td>{{ $student->address }}</td>
                            <td class="d-flex justify-content-center gap-1 flex-wrap">
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ route('students.courses', $student->id) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-journals"></i> Courses
                                </a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No students found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $students->withQueryString()->links() }}
    </div>
</div>
@endsection
