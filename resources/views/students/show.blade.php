@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Student Details</h5>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong>
                        <span class="ms-2">{{ $student->name }}</span>
                    </div>

                    <div class="mb-3">
                        <strong>Email:</strong>
                        <span class="ms-2">{{ $student->email }}</span>
                    </div>

                    <div class="mb-3">
                        <strong>Date of Birth:</strong>
                        <span class="ms-2">{{ $student->date_of_birth }}</span>
                    </div>

                    <div class="mb-3">
                        <strong>Gender:</strong>
                        <span class="ms-2 text-capitalize">{{ $student->gender }}</span>
                    </div>

                    <div class="mb-3">
                        <strong>Phone Number:</strong>
                        <span class="ms-2">{{ $student->phone_number }}</span>
                    </div>

                    <div class="mb-3">
                        <strong>Address:</strong>
                        <span class="ms-2">{{ $student->address }}</span>
                    </div>
                </div>

                <div class="card-footer bg-light text-end">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
