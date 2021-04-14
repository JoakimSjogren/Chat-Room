<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SendMessageTest extends TestCase
{

    public function test_view_room()
    {

        $user = new User();
        $user->name = 'Test';
        $user->email = 'testing@testing.com';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->actingAs($user)
            ->get('room');

        $response->assertSeeText('Test');
        $response->assertStatus(200);
    }

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
