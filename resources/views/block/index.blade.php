@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Block overview</h3>
                <?php $totaal=0; ?>
                <?php $testtest=0; ?>
                @foreach ($stock as $blok)
                <?php $result=$blok->height * $blok->quantity * 1.03 *1.29;
                $totaal += $result;?>




                <p>Van bloktype {{ $blok->stok->name }} met lengte {{ $blok->height }} zijn er op dit moment {{ $blok->quantity }} blokken.</p>
<!-- Kubieke meters in p -->
                @endforeach
                
                
                <h3>Custom block overview</h3>
                @foreach ($customstock as $blok)
                <?php $result=$blok->height * $blok->quantity * 10.3 *12.9;
                $totaal += $result; ?>
                <p>Van bloktype {{ $blok->stok->name }} met lengte {{ $blok->height }} zijn er op dit moment {{ $blok->quantity }} blokken.</p>
                
<!-- Kubieke meters in p -->
                @endforeach

                <h3>Kubekemeters in opslag</h3>
                <p>Totaal aantal kubekemeter opgeslagen: <strong>{{$totaal}} m³</strong> </p>
                <ul>

                <hr/>
                <div id="blockMenu" >
                    <a href="{{ url('/block/add') }}">Add block</a>
                </div>

            </div>
        </div>
     </div>
@endsection
