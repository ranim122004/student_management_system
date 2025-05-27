@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Welcome, {{ $user->name }}</h2>

    <h3>Your Courses</h3>
    <ul>
        @forelse($courses as $course)
            <li>{{ $course->name }}</li>
        @empty
            <li>No enrolled courses</li>
        @endforelse
    </ul>

    <h3>Your Grades</h3>
    <ul>
        @forelse($grades as $grade)
            <li>{{ $grade->course->name }} - Final: {{ $grade->final_grade ?? 'N/A' }}</li>
        @empty
            <li>No grades assigned</li>
        @endforelse
    </ul>
</div>
@endsection
