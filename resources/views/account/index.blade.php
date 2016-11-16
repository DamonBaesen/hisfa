@extends('layouts.master')
@section('content')
<head>
    <meta charset="UTF-8">
    <title>Account</title>
</head>
<body>
<div id="profile_page">
<div class="profile">
            <img src="/uploads/avatars/{{ Auth::user()->foto }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2> {{ Auth::user()->name }}'s profiel</h2>
            <form enctype="multipart/form-data" action="/account/updatephoto" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit">
            </form>
            @if(session('message'))
                {{ session('message') }}<br>
            @endif

<form action="/account/changeuserinformation" method="post">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    <input type="text" value=" {{ Auth::user()->name }}" name="name">
    <input type="text" value=" {{ Auth::user()->email }}" name="email">
    <label for="checkbox_mails">Ik wil mails ontvangen</label>
    @if(Auth::user()->name)
        <input type="checkbox" name="checkbox_mail" value="1" checked>
    @else
        <input type="checkbox" name="checkbox_mail" value="0" >
    @endif
    <input type="submit" value="Gegevens aanpassen">
</form>

<form action="/account/changepassword" method="post">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    Wachtwoord: <input type="password" name="input_password1"><br>
    Wachtwoord bevestigen: <input type="password" name="input_password2"><br>
    <input type="submit" value="Wachtwoord aanpassen">
</form>

</div>
</div>
</body>
</html>

@if(Auth::user()->admin)

    Hey

@endif


@endsection