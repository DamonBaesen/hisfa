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
    <link rel="stylesheet" href="/css/login-style.css">
</head>
<body>


    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>