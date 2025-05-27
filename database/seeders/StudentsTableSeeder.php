<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'Raneem Al Zarif',
                'email' => 'raneemzarif@gmail.com',
                'date_of_birth' => '2004-05-12',
                'gender' => 'Female',
                'phone_number' => '1234567890',
                'address' => '123 Main Street, City A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ibrahim Ashkar',
                'email' => 'ibrahim@gmail.com',
                'date_of_birth' => '2000-09-22',
                'gender' => 'Male',
                'phone_number' => '0987654321',
                'address' => '456 Elm Street, City B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
