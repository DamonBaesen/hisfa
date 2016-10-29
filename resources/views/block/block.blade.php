@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Block overview</h3>
                @foreach ($stock as $blok)
                <p>Van bloktype {{ $blok->stok->name }} met lengte {{ $blok->height }} zijn er op dit moment {{ $blok->quantity }} blokken.</p>
                @endforeach
                
                
                <h3>Custom block overview</h3>
                @foreach ($stock as $blok)
                <p>Van bloktype {{ $blok->stok->name }} met lengte {{ $blok->height }} zijn er op dit moment {{ $blok->quantity }} blokken.</p>
                @endforeach
                <ul>

                </ul>
                <hr/>
                <div id="blockMenu" >
                    <a href="{{ url('/block/add') }}">Add block</a>
                </div>

            </div>
        </div>
     </div>
@endsection
