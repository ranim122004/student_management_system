<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | Student Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #ffffff;
            color: #343a40;
        }

        .navbar {
            background-color: #007bff;
        }

        .hero-section {
            background-color: #f0f4f8;
            padding: 70px 0;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            color: #007bff;
        }

        .hero-text {
            font-size: 1.2rem;
            color: #495057;
        }

        .footer {
            background-color: #343a40;
            color: #ccc;
            padding: 9.5px;
            text-align: center;
        }

        .btn-outline-light:hover {
            background-color: white;
            color: #007bff;
        }

        .pdf-buttons a {
            min-width: 240px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm px-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold" href="#">
                <i class="bi bi-person-circle me-2 fs-4"></i> StudentSys
            </a>
            <div class="ms-auto">
                <a href="/register" class="btn btn-outline-light me-2">Register</a>
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h1 class="hero-title">Empower Learning with Simplicity</h1>
                    <p class="hero-text">
                        Welcome to StudentSys — the modern solution for educational institutions to streamline student, course, and grade management.
                        <br><br>
                        Whether you're an administrator, teacher, or student, our system simplifies your academic journey with clarity and control.
                    </p>

                    <!-- PDF Download Buttons -->
                    <div class="mt-4 pdf-buttons">
                        <a href="{{ asset('User_Manual_Student_Management_System_Clean.pdf') }}" class="btn btn-primary me-2 mb-2" download>
                            <i class="bi bi-file-earmark-text me-1"></i> Download User Manual
                        </a>
                        <a href="{{ asset('Setup_and_Code_Overview_Student_Management_System.pdf') }}" class="btn btn-secondary mb-2" download>
                            <i class="bi bi-file-earmark-code me-1"></i> Download Documentation
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('landing.png') }}" alt="Student System" class="img-fluid rounded shadow" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} StudentSys. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
