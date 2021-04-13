<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_login_form()
    {
        $response = $this->get('/');
        $response->assertSeeText('Name');
        $response->assertStatus(200);
    }

    public function test_login_user()
    {
        $user = new User();
        $user->name = 'Testing';
        $user->email = 'test@testing.com';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'name' => 'Testing',
                'password' => '123',
            ]);

        $response->assertSeeText('Hej Testing');
    }

    public function test_login_user_without_password()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'name' => 'Testing',
            ]);

        $response->assertSeeText('Whoops.. something went wrong!');
    }

    public function test_login_fail()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'name' => 'Testing',
                'password' => 'invalid-password',
            ]);

        $response->assertSeeText('Whoops.. something went wrong!');
    }
}
