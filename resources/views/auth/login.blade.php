@extends('layouts.guest')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background: #eaf4ff;">
    <div class="card shadow p-4" style="width: 100%; max-width: 420px;">
        <h3 class="text-center text-primary mb-4">Login to Your Account</h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <div class="text-center mt-3">
            <small>Don't have an account? <a href="{{ route('register') }}">Register here</a></small>
        </div>
    </div>
</div>
@endsection
