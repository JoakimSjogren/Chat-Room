<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendMessageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        $this->validate($request, [
            'message' => 'required',
        ]);
        
        $message = new Message();
        $message->message = $request->input('message');
        $message->user_id = Auth::id();
        $message->save();

        return back()->withErrors('Ajabaja det funkar inte!');
    }
}
