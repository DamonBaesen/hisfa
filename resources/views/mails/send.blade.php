<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mail</title>
</head>
<body>
<style>
    footer{
        display: block;
        height: 50px;
        width: 100%;
        background-color: #7BB85B;
    }
    p{
        display: block;
        height: 200px;
        width: 100%;
    }
    h1{
        display: block;
        width: 100%;
        height: 50px;
        font-size: 2em;
    }

</style>
<h1> {{ $title }}</h1>
<p> De silo met het nummer: {{ $id  }} zit bijna vol, deze is {{ $percentage }}% gevuld.</p>
<footer>
    <p>Dit is een geautomatiseerd bericht. Deze optie uitschakelen kan je <a href='http://www.hisfa.be/account/edit'>hier</a> doen.</p>
</footer>

</body>
</html>
