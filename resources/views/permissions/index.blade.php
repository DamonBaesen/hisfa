@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
        <link rel="stylesheet" href="/css/permissions-style.css">
        <link rel="stylesheet" href="/css/account-style.css">
    </head>
    <style>
        h3{
            margin-bottom: 25px;
        }
        p{
           
            padding-top: 40px;
            padding-left: 20px;

        }
        li{
            list-style: none;
            width: 100%;
            padding:5px;
            height: 85px;
            display: flex;
            cursor: pointer;
            margin-bottom: 15px;
        }


    </style>
    <div id="profile_page">
        <div class="profile">
            <h3>Aanpassen permissie gebruikers</h3>
                @foreach ($userList as $user)
                    <li onclick="window.location.href='/permissions/edit/{{$user->id}}'">
                        <img src="uploads/avatars/{{$user->foto}}" alt="User photo">
                        <p>{{ $user->name }}</p>
                    </li>
                @endforeach
            </div>
    </div>
    </div>
@endsection