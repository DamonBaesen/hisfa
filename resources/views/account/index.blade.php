@extends('layouts.master')
@section('content')
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="css/account-style.css">
</head>
<body>
<div id="profile_page">
<div class="profile">
            <div class="account-header">
                <div>
                    <img src="/uploads/avatars/{{ Auth::user()->foto }}">
                    <span>{{ Auth::user()->name }}'s profiel</span>
                    @if(session('message'))
                        <h5>{{ session('message') }}</h5>
                    @else
                        <h5> &nbsp;</h5>
                    @endif
                </div>
                @if( Auth::user()->admin  == 1)
                <div>
                    <div class="permission-btn" onclick="window.location.href='/permissions'">
                        <span class="glyphicon glyphicon glyphicon-lock" aria-hidden="true"></span>
                        <p>Permissions</p>
                    </div>
                </div>
                @endif
            </div>


            <label>Foto gebruiker</label>
            <form enctype="multipart/form-data" id="change_photo" action="/account/updatephoto" method="POST">
                <input type="file" name="avatar" id="photo_button" style="font-size: 0.6em; margin-top: 10px">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Foto uploaden" class="profile_button">
            </form>
    <label>Gegevens gebruiker</label>
<form action="/account/changeuserinformation" method="post">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    Naam: <input type="text" class="input" value="{{ Auth::user()->name }}" name="name">
    Email: <input type="text" class="input" value="{{ Auth::user()->email }}" name="email">


    @if(Auth::user()->name)
        <input type="checkbox" name="checkbox_mail" value="1" class="checkbox" checked><p>Ik wil mails ontvangen</p>

    @else
        <input type="checkbox" name="checkbox_mail" value="0" class="checkbox" ><p>Ik wil mails ontvangen</p>
    @endif

    <input type="submit" value="Opslaan" class="profile_button">
</form>
    <label>Wachtwoord wijzigen</label>
<form action="/account/changepassword" method="post">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    Nieuw wachtwoord: <input type="password" class="input" name="input_password1">
    Wachtwoord bevestigen: <input type="password" class="input" name="input_password2">
    <input type="submit" value="Wachtwoord wijzigen" class="profile_button">
</form>

</div>
</div>
</body>
</html>

@endsection