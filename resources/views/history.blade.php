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
                        @if(($eventlogs->id % 2) == 0)
                        @if (!empty($eventlogs->silonr))
                            <p class="historyEven">{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->silonr}}</p>
                        @elseif(!empty($eventlogs->block))
                            <p class="historyEven">{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->block}}</p>
                        @elseif(!empty($eventlogs->quality))
                            <p class="historyEven">{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->quality}}</p>
                        @elseif(!empty($eventlogs->rawmaterial))
                            <p class="historyEven">{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->rawmaterial}}</p>
                        @endif
                        @else
                            @if (!empty($eventlogs->silonr))
                                <p class="historyOnEven">{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->silonr}}</p>
                            @elseif(!empty($eventlogs->block))
                                <p class="historyOnEven">{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->block}}</p>
                            @elseif(!empty($eventlogs->quality))
                                <p class="historyOnEven">{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->quality}}</>
                            @elseif(!empty($eventlogs->rawmaterial))
                                <p class="historyOnEven">{{$eventlogs->updated_at}}: {{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->rawmaterial}}</>
                            @endif
                            @endif

                    @endforeach
                </div>
            </div>
    </div>

    </body>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="/js/silo.js"></script>
@endsection
