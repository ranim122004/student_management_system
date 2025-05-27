# Code Overview

## StudentController
Handles student CRUD operations.

- `index()` - List all students.
- `create()` - Show form to add a new student.
- `store()` - Save student to database.
- `edit()` - Show form to edit a student.
- `update()` - Update student data.
- `destroy()` - Delete student record.
- `studentCourses($studentId)` - List all courses assigned to a specific student. (if implemented)

## CourseController
Handles CRUD operations for courses associated with students.

- `index()` - List all courses.
- `create()` - Show form to add a new course.
- `store()` - Save course to database.
- `edit()` - Show form to edit a course.
- `update()` - Update course data.
- `destroy()` - Delete a course.
- `show()` - Display details of a course.

## GradeController
Manages grades assigned to students in courses.

- `index()` - List all grades.
- `create()` - Show form to add a grade.
- `store()` - Save grade to database.
- `edit()` - Show form to edit grade.
- `update()` - Update grade data.
- `destroy()` - Delete grade.

## Models

- `Student` – hasMany `Course`, hasMany `Grade`
- `Course` – belongsTo `Student`, hasMany `Grade`
- `Grade` – belongsTo `Student`, belongsTo `Course`
