Hej {{ $user->name }} 

<a href="logout">Logout</a>

<div>
    @foreach ($messages as $message)
        <p>{{$message->message}}</p>
    @endforeach
</div>

<form method="post" action="/message">
@csrf

<div>
<input name="message" type="text" id="message" />
</div>
<button type="submit">send</button>

</form>