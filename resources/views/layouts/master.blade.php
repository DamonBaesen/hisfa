<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HISFA</title>



    <link href="/css/forms.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/navigation-style.css">
</head>
<body>
<nav class="navigation-bar">
    <div class="container">
        <div class="navigation">

            <div>
                <a class="navigation-title" href="{{ url('/') }}">
                    HISFA
                </a>
            </div>
            <div class="navigation-links">
                <a href="{{ url('/dashboard') }}"  ><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                <a href="{{ url('/silo') }}"  ><span class="glyphicon turn90 glyphicon-tasks" aria-hidden="true"></span></a>
                <a href="{{ url('/resources') }}"  ><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></a>
                <a href="{{ url('/account') }}"  ><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                <a href="{{ url('/logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
            </div>




        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">



        </div>
    </div>
</nav>

@yield('content')

<script src="/js/app.js"></script>
</body>
</html>