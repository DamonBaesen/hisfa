
@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Add account | HISFA</title>
        <link rel="stylesheet" href="/css/account-style.css">
    </head>
    <body>
    <div id="profile_page">
        <div class="profile">

                <form action="/account/add" method="post">
                    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
                    Naam: <input type="text" class="input" placeholder="Name" name="textName">
                    Email: <input type="email" class="input" placeholder="Email" name="textEmail">
                    Wachtwoord: <input type="password" class="input" value="" name="textWachtwoord">
                    <input type="submit" value="Add user" class="profile_button">
                </form>

        </div>
    </div>
@endsection
