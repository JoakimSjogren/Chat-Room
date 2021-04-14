# chat-room
This is a laravel school assignment to learn and get better understanding of writing backend applications.

<h2>Installation:</h2>
<p>1. Download the repository to your computer</p>
<p>2. Open up console and cd into the project folder</p>
<p>3. Type "composer update". Add an '.env' file (copy and paste from '.env-example'.</p>
<p>4. Type php artistan serve.</p>
    
<h2>Code Review:</h2>
<ol>
    <li>Tests does not work without the Unit map.</li>
    <li>Controller that is named messages, should it not be called something like MessageController? </li>
    <li>Some Models are declared but never used. </li>
    <li>Clockwork is not installed</li>
    <li>In web.php there are some commented code</li>
    <li>`room.blade.php :13,17` there are spaces between class and = </li>
    <li>Psr-12 standard is not followed in the blade files.</li>
    <li>SendMessageController does not seem to send message but save message. Should maybe be called SaveMessageController instead.</li>
    <li> In register.blade there is `@error` in your class, what does it do? It does not seem to do anything. </li>
    <li>Fun application!! </li>
    <li>Nice, clean written code</li>
    <li>When running tests (added Unit map) it seems to work on Mac with passed tests but not on Windows. We don't know why!</li>
    <li>Nice job keeping your db-queries count low, no N+1 problem in sight!</li>
    <li>When creating an account you have to sign in afterwards, to make it easier for the user they should be redirected logged in.</li>
    <li>It is not super clear where you are suppose to write your message.</li>
    <li>Thinking accessibilty there should be a label to your input field in room.blade.php </li>
    <li>It would be fun to see username next to the messages in room.blade.php</li>
    <li>In tests you have `$response` variable that is never used. </li>
    <li>There aren't tests for every Route, for example get room. </li>
    <li>Great job!</li>
        </ol>

<h2>Created by:</h2>
<a href="https://github.com/JoakimSjogren">Joakim</a> <br>
    <a href="https://github.com/gillybeans">Gilda</a>
