<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            [
                'student_id' => 1, // must match an existing student
                'course_name' => 'Mathematics',
                'instructor_name' => 'Dr. Adams',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 2,
                'course_name' => 'Physics',
                'instructor_name' => 'Prof. Brown',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
