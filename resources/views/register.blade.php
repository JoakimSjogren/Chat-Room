@extends('header')
@include('errors')

<a href="/" class = "home-button">Home</a>

<form method="POST" action="register">
    @csrf
    <div class="create-account-form">
        <label for="name">Username:</label>
        <input class="input" name="name" type="text" id="name" required />
    </div>
    <div>
        <label for="email">Email:</label>
        <input class="input" name="email" type="email" id="email" required />
    </div>
    <div>
        <label for="password">Password:</label>
        <input class="input" name="password" type="password" id="password" required />
    </div>
    <button type="submit">register</button>
</form>