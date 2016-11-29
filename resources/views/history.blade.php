@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
    </head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/history-style.css">
    <body>
    <div class="silo-container">
        <div class="silo-title">
            <h5>Events logs</h5>
                <div class="log-console">
                    @foreach($eventlog as $eventlogs)
                        @if (!empty($eventlogs->silonr))
                            <p>{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->silonr}}</p>
                        @elseif(!empty($eventlogs->block))
                            <p>{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->block}}</p>
                        @elseif(!empty($eventlogs->quality))
                            <p>{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->quality}}</p>
                        @elseif(!empty($eventlogs->rawmaterial))
                            <p>{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->rawmaterial}}</p>
                        @endif
                    @endforeach
                </div>
            </div>
    </div>

    </body>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="/js/silo.js"></script>
@endsection
