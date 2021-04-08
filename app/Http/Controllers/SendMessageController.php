<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

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
        $message->save();

        return back()->withErrors('Ajabaja det funkar inte!');
    }
}
