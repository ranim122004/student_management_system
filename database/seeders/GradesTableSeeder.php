<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('grades')->insert([
            [
                'student_id' => 1,
                'course_id' => 1,
                'partial_grade' => 85,
                'final_grade' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 2,
                'course_id' => 2,
                'partial_grade' => 75,
                'final_grade' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
