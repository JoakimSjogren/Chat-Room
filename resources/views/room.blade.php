@extends('header')

Hej {{ $user->name }} 

<a href="logout">Logout</a>

<div class="message-container">
    
</div>

<form class = "message-form" method="post" action="/message">
@csrf

<div>
<input name="message" type="text" id="message" />
</div>
<button type="submit">send</button>

</form>
