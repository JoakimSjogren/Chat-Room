@extends('header')
<a href="/" class = "home-button">Home</a>
@include('errors')

<form method="POST" action="register">
@csrf

<div class="create-account-form">
<label for="name">Username</label>
<input class="input @error('name') is-danger @enderror" name="name" type="text" id="name" required />
</div>

<div>
<label for="email">Email</label>
<input class="input @error('email') is-danger @enderror" name="email" type="email" id="email" required />
</div>

<div>
<label for="password">Password</label>
<input class="input @error('password') is-danger @enderror" name="password" type="password" id="password" required />
</div>

<button type="submit">register</button>

</form>