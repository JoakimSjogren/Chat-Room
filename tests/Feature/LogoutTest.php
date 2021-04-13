<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_logout()
    {
        $user = new User();
        $user->name = 'Testing';
        $user->email = 'test@testing.com';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->get('logout', [
                'name' => 'Testing',
                'password' => '123',
            ]);
    }
}
