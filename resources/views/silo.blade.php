@extends('layouts.master')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

                <link rel="stylesheet" href="/css/master-style.css">
                <link rel="stylesheet" href="/css/dashboard-style.css">
                <link rel="stylesheet" href="/css/silo-style.css">
                <body>
                <div class="silo-container">
                    <div class="silo-title">
                        <h5>Silo managment</h5>
                        <span class="config-icon glyphicon glyphicon-cog" aria-hidden="false"></span>
                    </div>


                    <div class="contain">
                        <div class="silo-stats">
                            @foreach($primesilo as $silos)
                                <div class=silo-stats-stat>
                                    @if( $silos->quantity < 50)
                                        <progress class="progress progress-success" value="{{ $silos->quantity }}" max="100"></progress>
                                    @elseif($silos->quantity < 90)
                                        <progress class="progress progress-warning" value="{{ $silos->quantity }}" max="100"></progress>
                                    @else
                                        <progress class="progress progress-danger" value="{{ $silos->quantity }}" max="100"></progress>
                                    @endif
                                    <h4>{{ $silos->id }}</h4>
                                    <input id="type" name="type" type="text" placeholder="vol%" class="form-control input-md" required="" value="{{ $silos->quantity }}%">
                                    <div class="btn-group silo-menu">
                                        <button type="button" class="btn dashboard-stock-select-btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ $silos->grondstof->type }}</button>
                                        <div class="dropdown-menu">
                                            @foreach ($rawmaterial as $rawmaterials)
                                                <a class="dropdown-item" href="#">{{ $rawmaterials->type }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <a href="/silo/remove/{{ $silos->id }}" class="silo-delete" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                </div>
                            @endforeach
                            <div id="new-silo" class=silo-stats-stat>
                                <span class="icon-plus glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>

                </body>
                <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
                <script src="/js/silo.js"></script>
@endsection
