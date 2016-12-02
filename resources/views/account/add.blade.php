
@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
        <link rel="stylesheet" href="/css/account-style.css">
    </head>
    <body>
    <div id="profile_page">
        <div class="profile">

                <form action="/account/add" method="post">
                    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
                    Naam: <input type="text" class="input" placeholder="Naam" name="textName">
                    Email: <input type="email" class="input" placeholder="Email" name="textEmail">
                    Wachtwoord: <input type="password" class="input" value="" name="textWachtwoord">
                    <input type="submit" value="Toevoegen" class="profile_button">
                </form>

        </div>
    </div>
@endsection
