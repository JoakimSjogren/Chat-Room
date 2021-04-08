<form method="POST" action="register">
@csrf

<div>
<label for="name">Username</label>
<input name="name" type="name" id="name" />
</div>

<div>
<label for="email">Email</label>
<input name="email" type="email" id="email" />
</div>

<div>
<label for="password">Password</label>
<input name="password" type="password" id="password" />
</div>

<button type="submit">register</button>

</form>