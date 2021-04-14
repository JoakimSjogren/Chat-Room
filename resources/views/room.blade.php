@extends('header')

<h1>Hej {{ $user->name }} </h1>

<a href="logout">Logout</a>
<div class="container">
<div class="message-container">
    @foreach ($messages as $message)
        {{-- <p>{{$message}}</p>     --}}
    @endforeach
</div>

<form class = "message-form" method="post" action="/message">
@csrf

<div>
<input class = "message-input" name="message" type="text" id="message" max="5"/>
</div>
<button type="submit">send</button>

</form>
</div>