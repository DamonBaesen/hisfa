<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HISFA -- Dashboard</title>
</head>
<body>
@foreach ($silo as $silos)
    <p>Dit is primesilo met nummer {{ $silos->primesiloid }}. Deze silo is op dit moment voor {{ $silos->quantity }} procent vol.</p>
@endforeach

@foreach ($recyclesilo as $recyclesilos)
    <p>Dit is afavlsilo met nummer {{ $recyclesilos->recyclesiloid }}. Deze silo is op dit moment voor {{ $recyclesilos->quantity }} procent vol.</p>
@endforeach

</body>
</html>