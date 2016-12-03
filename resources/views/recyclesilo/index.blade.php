@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
    </head>



    <link rel="stylesheet" href="/css/master-style.css">
    <link rel="stylesheet" href="/css/silo-style.css">
    <body>
    <div class="silo-container">
        <div class="silo-title">
            <h5>Recyclesilo Preview</h5>
            <span class="config-icon glyphicon glyphicon-cog" aria-hidden="false"></span>
            <br class="clearfix">
        </div>
        <div class="contain">
            <div class="silo-stats">
                @foreach($recyclesilo as $silos)
                    <div class=silo-stats-stat onclick="window.location.href='/recyclesilo/edit/{{$silos->id}}'">
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
                            <h4>{{ $silos->quantity }}%</h4>
                        </div>
                        <a href="/recyclesilo/remove/{{ $silos->id }}" class="silo-delete" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                    </div>

                @endforeach

            </div>
            <div id="new-silo" class=silo-stats-stat onclick="window.location.href='/recyclesilo/add'">
                <span class="icon-plus glyphicon glyphicon-plus" aria-hidden="true"></span>
            </div>
        </div>
    </div>

    </body>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="/js/silo.js"></script>
@endsection
