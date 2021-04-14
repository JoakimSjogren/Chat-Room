@extends('header')

<div class="welcome-name">
    <h1>Hej {{ $user->name }} </h1>
</div>
<div class="logout-btn">
    <h2><a href="logout">Logout</a></h2>
</div>
<div class="container">
<div class="message-container">
</div>
<form class="message-form" method="post" action="/message">
    @csrf
    <div>
        <input class="message-input" name="message" type="text" id="message" max="5"/>
    </div>
    <button type="submit">send</button>
</form>
</div>