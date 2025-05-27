@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="card-header">
    @if (Auth::user()->role === 'admin')
        Admin Dashboard
    @elseif (Auth::user()->role === 'teacher')
        Teacher Dashboard
    @else
        Dashboard
    @endif
</h5>

                    <span class="badge bg-light text-primary">
                        {{ Auth::check() ? Auth::user()->role : 'Guest' }}
                    </span>
                </div>

                <div class="card-body">
                    @if(Auth::check())
                        <p class="lead">Welcome, <strong>{{ Auth::user()->name }}</strong>!</p>
                    @else
                        <p class="text-danger">User not logged in.</p>
                    @endif

                    <div class="row mt-4">
                        <!-- Student Management -->
                        <div class="col-md-4 mb-3">
                            <a href="{{ route('students.index') }}" class="text-decoration-none">
                                <div class="card text-center h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <i class="bi bi-people-fill fs-1 text-primary"></i>
                                        <h6 class="mt-3">Student Management</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Course Management -->
                        <div class="col-md-4 mb-3">
                            <a href="{{ route('courses.index') }}" class="text-decoration-none">
                                <div class="card text-center h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <i class="bi bi-book-fill fs-1 text-success"></i>
                                        <h6 class="mt-3">Course Management</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Grade Management -->
                        <div class="col-md-4 mb-3">
                            <a href="{{ route('grades.index') }}" class="text-decoration-none">
                                <div class="card text-center h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <i class="bi bi-bar-chart-fill fs-1 text-warning"></i>
                                        <h6 class="mt-3">Grade Management</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div> <!-- card-body -->
            </div>
        </div>
    </div>
</div>
@endsection
