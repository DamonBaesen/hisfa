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
<<<<<<< HEAD
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/forms.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/navigation-style.css">
    <link rel="stylesheet" href="/css/account-style.css">
=======
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/navigation-style.css">
    <link rel="stylesheet" href="/css/master-style.css">
>>>>>>> master
</head>
<body>
<div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
        <div class="navigation-buttons">
            <a href="{{ url('/dashboard') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><p>DASHBOARD</p></a>
            <a href="{{ url('/block') }}"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span><p>STOCK</p></a>
            <a href="{{ url('/quality') }}"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><p>QUALITY</p></a>
            <a href="{{ url('/silo') }}"><span class="turn90 glyphicon glyphicon-tasks" aria-hidden="true"></span><p>PRIME</p></a>
            <a href="{{ url('/recyclesilo') }}"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span><p>RECYCLE</p></a>
            <a href="{{ url('/rawmaterial') }}"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span><p>RAWMATERIAL</p></a>
            <a href="{{ url('/history') }}"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span><p>HISTORY</p></a>
            <a href="{{ url('/account') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><p>ACCOUNT</p></a>
            <a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
        </div>
    </div>

</div>
<nav class="navigation-bar">
    <div class="container">
        <div class="navigation">


            <!-- Collapsed Hamburger -->
            <div>
                <a class="navigation-title" href="{{ url('/') }}">
                    HISFA
                </a>
            </div>
            <span onclick="openNav()"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></span>
            <!-- Branding Image -->


        </div>


    </div>
</nav>

@yield('content')

        <!-- Scripts -->
<script src="/js/app.js"></script>
<script>
    /* Open when someone clicks on the span element */
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
</body>
</html>