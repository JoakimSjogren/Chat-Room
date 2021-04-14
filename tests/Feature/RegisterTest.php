<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_register_form()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_register()
    {
        $response = $this
            ->followingRedirects()
            ->post('register', [
                'name' => 'Testing',
                'email' => 'test@testing.com',
                'password' => '123'
            ]);

        $this->assertDatabaseHas('users', ['name' => 'Testing', 'email' => 'test@testing.com']);
    }
}
