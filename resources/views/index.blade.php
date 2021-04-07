@include('errors')

<form method = "post" action = '/login'>
@csrf

<div>
<label for="name">Name</label>
<input name="name" type="name" id="name" />
</div>

<div>
<label for="password">Password</label>
<input name="password" type="password" id="password" />
</div>

<button type="submit">enter</button>

</form>