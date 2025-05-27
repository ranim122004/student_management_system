@extends('layouts.guest')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #f0f8ff;">
    <div class="card shadow rounded p-4" style="width: 100%; max-width: 420px;">
        <h3 class="text-center mb-3 text-primary">Create Your Account</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" name="name" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

<div class="mb-3">
    <label for="role" class="form-label">Register As</label>
    <select name="role" id="role" class="form-select" required>
        <option value="">Choose a role</option>
        <option value="admin">Admin</option>
        <option value="teacher">Teacher</option>
    </select>
</div>



            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <div class="text-center mt-3">
            <small>Already have an account? <a href="{{ route('login') }}">Login here</a></small>
        </div>
    </div>
</div>
@endsection
