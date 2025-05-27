<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_users_can_register()
{
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'testuser@example.com',
        'password' => 'Password1@', // ✅ strong password
        'password_confirmation' => 'Password1@',
        'role' => 'teacher',
    ]);

    $response->assertRedirect('/dashboard');

    $this->assertDatabaseHas('users', [
        'email' => 'testuser@example.com',
    ]);
}

}
