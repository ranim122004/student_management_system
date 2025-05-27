# 📘 Student Management System – User Manual


## 👥 User Roles

### 1. Admin/Teacher
- Full access to all modules (students, courses, grades)
- Can add, edit, and delete records
- Has access to dashboard and user profile
- Can search for students and courses.

## 🚀 Getting Started

### Step 1: Access the App
Open your browser and go to:  
[http://localhost:8000](http://localhost:8000)

### Step 2: Register
- Click on **Register**
- Fill in name, email, password
- Select your role (admin or teacher)

### Step 3: Login
Use your credentials to log in to the dashboard.

## 🧭 Navigation Guide

Landing Page
├── /register – Create a new account
├── /login – Login to your dashboard
└── Dashboard
    ├── Profile – View/edit your info
    ├── Logout – Exit the system
    ├── Students
    │   ├── View All
    │   ├── Add New
    │   ├── Edit / Delete
    ├── Courses
    │   ├── View All
    │   ├── Add / Edit / Delete
    ├── Grades
    │   ├── Add / Edit / Delete

### 🎓 Student Management
- **View Students**: Display list of registered students
- **Add Student**: Create a new student with full details
- **Edit Student**: Modify student information
- **Delete Student**: Remove student from the system

### 📚 Course Management
- **View Courses**: List all courses and enrolled students
- **Add Course**: Assign a course with instructor to a student
- **Edit Course**: Update course or instructor details
- **Delete Course**: Remove course from the system

### 📝 Grade Management
- **Add Grades**: Assign partial and final grades per course
- **Edit Grades**: Update grade records
- **Delete Grades**: Remove grade entries

## 🔐 Authentication & Security

- All routes are protected by Laravel’s `auth` middleware
- Passwords are encrypted using `bcrypt`
- Users must verify their email (if implemented)
- Role-based access control restricts unauthorized actions

## 🧪 Testing & Stability

- Application has been unit and feature tested
- Access, forms, validation
- Handles typical user and data validation errors

---

## 📦 Technology Stack

- Laravel 10 (PHP 8.1+)
- MySQL Database
- Bootstrap + Tailwind CSS (via CDN)

## 📞 Support

For help and troubleshooting:
- Visit: [https://github.com/ranim122004/student_management_system](https://github.com/ranim122004/student_management_system)

## 📝 Version Info

- **Project**: Laravel Student Management System  
- **Version**: 1.0  
- **Last Updated**: May 27, 2025

