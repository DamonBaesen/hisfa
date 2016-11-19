@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
    </head>



                <link rel="stylesheet" href="/css/master-style.css">
                <link rel="stylesheet" href="/css/dashboard-style.css">
                <link rel="stylesheet" href="/css/silo-style.css">
                <body>
                <div class="silo-container">
                    <div class="silo-title">
                        <h5>Primesilo Preview</h5>
                        <span class="config-icon glyphicon glyphicon-cog" aria-hidden="false"></span>
                    </div>


                    <div class="contain">
                        <div class="silo-stats">
                            @foreach($primesilo as $silos)
                                <div class=silo-stats-stat onclick="window.location.href='/silo/edit/{{$silos->id}}'">
                                    @if( $silos->quantity < 50)
                                        <progress class="progress progress-success" value="{{ $silos->quantity }}" max="100"></progress>
                                    @elseif($silos->quantity < 90)
                                        <progress class="progress progress-warning" value="{{ $silos->quantity }}" max="100"></progress>
                                    @else
                                        <progress class="progress progress-danger" value="{{ $silos->quantity }}" max="100"></progress>
                                    @endif
                                    <h4>{{ $silos->id }}</h4>

                                    <p id="type">{{ $silos->quantity }}%</p>
                                        <p>{{$silos->grondstof->type}}</p>
                                    <a href="/silo/remove/{{ $silos->id }}" class="silo-delete" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                        <a href="/silo/edit/{{ $silos->id }}" class="silo-delete" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                                </div>
                            @endforeach
                            <div id="new-silo" class=silo-stats-stat onclick="window.location.href='/silo/add'">
                                <span class="icon-plus glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>

                </body>
                <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
                <script src="/js/silo.js"></script>
@endsection
