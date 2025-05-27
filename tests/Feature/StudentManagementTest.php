<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentManagementTest extends TestCase
{
    use RefreshDatabase;

   public function test_user_can_create_student()
{
    $user = User::factory()->create();
 

    $response = $this->post('/students', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'date_of_birth' => '2000-01-01',
        'gender' => 'male',
        'phone_number' => '1234567890',
        'address' => '123 Main St',
    ]);

    $response->assertRedirect('/students');
    $this->assertDatabaseHas('students', ['email' => 'john@example.com']);
}

}
