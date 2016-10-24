<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HISFA</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/forms.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/navigation-style.css">

</head>
<body>
    <nav class="navigation-bar">
        <div class="container">
            <div class="navigation">

                <!-- Collapsed Hamburger -->
                <div>
                    <a class="navigation-title" href="{{ url('/') }}">
                        HISFA
                    </a>
                </div>
                <!-- Branding Image -->
                <div class="navigation-links">
                    <a href="{{ url('/dashboard') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                    <a href="{{ url('/silo') }}"><span class="turn90 glyphicon glyphicon-tasks" aria-hidden="true"></span></a>
                    <a href="{{ url('/recyclesilo') }}"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></a>
                    <a href="{{ url('/rawmatirial') }}"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span></a>
                    <a href="{{ url('/logs') }}"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a>
                    <a href="{{ url('/account') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                    <a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
                </div>

            </div>


        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>