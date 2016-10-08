<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
</head>
<body>

@if(session('message'))
    {{ session('message') }}<br>
@endif

<h1>Accountgegevens</h1>
<form action="/account/changeuserinformation" method="post">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    <input type="text" value="{{ $user->name }}" name="name">
    <input type="text" value="{{ $user->email }}" name="email">
    <input type="submit" value="Gegevens aanpassen">
</form>

<h1>Mails</h1>
<form action="/account/changeusermails" method="post">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    <input type="text">
    <input type="submit" value="Gegevens aanpassen">
</form>


<h1>Wachtwoord veranderen</h1>
<form action="/account/changepassword" method="post">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    Wachtwoord: <input type="password" name="input_password1"><br>
    Wachtwoord bevestigen: <input type="password" name="input_password2"><br>
    <input type="submit" value="Wachtwoord aanpassen">
</form>

</body>
</html>