@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
        <link rel="stylesheet" href="/css/permissions-style.css">
    </head>

        <div class="row">
            <div class=" permission-frame panel panel-default" id="form">

                <h3>Permission users overview</h3>

                @foreach ($userList as $user)
                    <li onclick="window.location.href='/permissions/edit/{{$user->id}}'">
                        <img src="uploads/avatars/{{$user->foto}}" alt="">
                        <p>{{ $user->name }}</p>
                    </li>
                @endforeach





        </div>
    </div>
@endsection