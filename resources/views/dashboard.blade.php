<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HISFA -- Dashboard</title>
</head>
<body>
<a href="/silo">
<h1>PRIMESILO</h1>
</a>
@foreach ($primesilo as $silos)
    <p>Dit is primesilo met nummer {{ $silos->id }}. Deze silo is op dit moment voor {{ $silos->quantity }} procent vol.</p>
    <p>In deze silo zit op dit moment {{$silos->grondstof->type}}</p>
@endforeach
<br>
<br>
<a href="/recyclesilo">
<h1>RECYCLESILO</h1>
</a>
@foreach ($recyclesilo as $silos) 
    <p>Dit is afvalsilo met nummer {{ $silos->id }}. Deze silo is op dit moment voor {{ $silos->quantity }} procent vol.</p> 
@endforeach
<br>
<br>
<a href="/block">
<h1>STOCK</h1>
</a>
@foreach ($stock as $stocks) 
<p>Van bloktype {{ $stocks->stok->name }} met lengte {{ $stocks->height }} zijn er op dit moment {{ $stocks->quantity }} blokken.</p> 
@endforeach
<br>
<br>
<a href="/block">
<h1>CUSTOMSTOCK</h1>
</a>
@foreach ($customstock as $customstocks) 
<p>Van bloktype {{ $customstocks->stok->name }} met afwijkendelengte {{ $customstocks->height }} zijn er op dit moment {{ $customstocks->quantity }} blokken.</p> 
@endforeach
<br>
<br>
<a href="/rawmaterial">
<h1>RAWMATERIAL</h1>
</a>
@foreach ($rawmaterial as $rawmaterials) 
<p>Van grondstof {{ $rawmaterials->type }} zijn er op dit moment {{ $rawmaterials->quantity }} octabins.</p> 
@endforeach




</body>
</html>