<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SendMessageTest extends TestCase
{
    function test_send_message()
    {
        $user = new User();
        $user->name = 'Testing';
        $user->email = 'test@testing.com';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->post('message', [
                'message' => 'test message',
            ]);

        $this->assertDatabaseHas('messages', ['message' => 'test message']);
    }
}
