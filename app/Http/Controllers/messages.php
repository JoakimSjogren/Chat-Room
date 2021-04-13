<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class messages extends Controller
{
    public function index(Message $message)
    {
        $messages = Message::latest()->take(10)->get();


        $usersNameMap = $messages->map(function ($user) {
            return $user["message"];
        });

        return $usersNameMap;
    }
}
