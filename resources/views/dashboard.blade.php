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

<br>

@foreach ($recyclesilo as $silos)
    <p>Dit is afvalsilo met nummer {{ $silos->recyclesiloid }}. Deze silo is op dit moment voor {{ $silos->quantity }} procent vol.</p>
@endforeach

<br>

@foreach ($stock as $stocks)
    <p>Van deze blok van type {{ $stocks->name }} met hoogte {{ $stocks->height }}m zijn op dit moment {{ $stocks->quantity }} aanwezig.</p>
@endforeach

<br>

@foreach ($customstock as $customstocks)
    <p>Van deze blok van type {{ $customstocks->name }} met afwijkende hoogte {{ $customstocks->height }}m zijn op dit moment {{ $customstocks->quantity }} aanwezig.</p>
@endforeach



</body>
</html>