@extends('header')

Hej {{ $user->name }} 

<a href="logout">Logout</a>

<div class="message-container">
    
    @foreach ($messages as $message)
        <p>{{$user->user}}</p>
        <p>{{$message->message}}</p>
    @endforeach
</div>

<form class = "message-form" method="post" action="/message">
@csrf

<div>
<input name="message" type="text" id="message" />
</div>
<button type="submit">send</button>

</form>
