<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class messages extends Controller
{
    public function index(Message $message)
    {
        $messages = Message::orderBy('id', 'desc')->take(10)->get();
        die(var_dump($messages));

        $usersNameMap = $messages->map(function ($user) {
            return $user["message"];
        });

        return $usersNameMap;
    }
}
