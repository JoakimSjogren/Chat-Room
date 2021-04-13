@extends('header')
    

@include('errors')

<form method = "post" action = '/login'>
@csrf

<img src="../images/logologin.png" height="200" alt="ChatLogo">

<div class="login-form">
<label for="name">Name</label>
<input name="name" type="name" id="name" />
</div>

<div>
<label for="password">Password</label>
<input name="password" type="password" id="password" />
</div>

<button type="submit">enter</button>

<br>

<a href="/register">Create an account</a>
</form>

</body>