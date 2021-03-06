@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Primesilo | HISFA</title>
    </head>



    <link rel="stylesheet" href="/css/master-style.css">
    <link rel="stylesheet" href="/css/silo-style.css">
    <body>
    <div class="silo-container">
        <div class="silo-title">
            <h5>Primesilo Preview</h5>
        </div>
        <div class="contain">
            <div class="silo-stats">
                @foreach($primesilo as $silos)
                    <div class=silo-stats-stat onclick="window.location.href='/silo/edit/{{$silos->id}}'">
                        <h3>{{ $silos->id }}</h3>

                        <div class="silo-graph">
                            @if( $silos->quantity < 50)
                                <div class="silo-graph-value" style="height:{{ $silos->quantity * 1.2 }}px; background-color: #5FB760;"> </div>
                            @elseif($silos->quantity < 90)
                                <div class="silo-graph-value" style="height:{{ $silos->quantity * 1.2 }}px; background-color: #EEAC57;"> </div>
                            @else
                                <div class="silo-graph-value" style="height:{{ $silos->quantity * 1.2 }}px; background-color: #D75452;"> </div>
                            @endif
                        </div>


                        <div class="silo-info">
                            <h3>{{$silos->grondstof->type}}</h3>
                            <h4>{{ $silos->quantity }}%</h4>
                        </div>
                        <a href="/silo/edit/{{$silos->id}}" id="editSilo">Edit</a>

                        <a href="/silo/remove/{{$silos->id}}" id="deleteSilo">Delete</a>
                    </div>

                @endforeach

            </div>
            <div id="new-silo" class=silo-stats-stat onclick="window.location.href='/silo/add'">
                <span class="icon-plus glyphicon glyphicon-plus"></span>
            </div>
        </div>
    </div>
    </body>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

@endsection
