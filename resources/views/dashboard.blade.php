<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HISFA -- Dashboard</title>
</head>
<body>
@foreach ($primesilo as $silos)
    <p>Dit is primesilo met nummer {{ $silos->primesiloid }}. Deze silo is op dit moment voor {{ $silos->quantity }} procent vol.</p>
    <p>In deze silo zit op dit moment {{$silos->type}}</p>
@endforeach

@foreach ($recyclesilo as $silos)
    <p>Dit is afvalsilo met nummer {{ $silos->recyclesiloid }}. Deze silo is op dit moment voor {{ $silos->quantity }} procent vol.</p>

@endforeach


</body>
</html>