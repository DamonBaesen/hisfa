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
                <?php $result= round($blok->height * $blok->quantity * 1.03 *1.29, 2);
                $totaal += $result;?>




                <p>Van bloktype {{ $blok->stok->name }} met lengte {{ $blok->height }} zijn er op dit moment {{ $blok->quantity }} blokken.</p><p> Aantal Kubeke meter :<strong>{{$result}} m³</strong></p><hr/>
<!-- Kubieke meters in p -->
                @endforeach

                
                <h3>Custom block overview</h3>
                @foreach ($customstock as $blok)
                <?php $result= round($blok->height * $blok->quantity * 1.03 *1.29, 2);
                $totaal += $result; ?>
                <p>Van bloktype {{ $blok->stok->name }} met lengte {{ $blok->height }} zijn er op dit moment {{ $blok->quantity }} blokken.</p><p> Aantal Kubeke meter :<strong>{{$result}} m³</strong></p><hr/>
                
<!-- Kubieke meters in p -->
                @endforeach

                <h3>Kubekemeters in opslag</h3>
                <p>Totaal aantal kubekemeter in stock: <strong>{{$totaal}} m³</strong> </p>
                <ul>

                <hr/>
                <div id="blockMenu" >
                    <a href="{{ url('/block/add') }}">Add block</a>
                </div>

            </div>
        </div>
     </div>
@endsection
