@extends('layouts.master')
@section('content')
    <head>
        <meta charset="UTF-8">
        <title>HISFA -- Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/master-style.css">
        <link rel="stylesheet" href="/css/dashboard-style.css">
        <link rel="stylesheet" href="/css/donut-style.css">
    </head>
    <body>

    <div class="dash-container">
        <div class="left">
            <div class="frame stock">
                <div class="frame-title">
                    <h2>Blocks in storage</h2> </div>
                <div class="btn-group stock-menu">
                    <button type="button" class="btn dashboard-stock-select-btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> P15 </button>
                    <div class="dropdown-menu">
                        @foreach ($qualities as $qualitylist)
                            <a class="dropdown-item" href="#">{{ $qualitylist->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="stock-group">
                    @foreach($selectQuality as $selectQualities)
                        <div class="stock-container">
                            <h2>{{ $selectQualities->height }}m</h2>
                            <h3>{{ $selectQualities->quantity }}</h3>
                            <p>blocks</p>
                            <div class="oppervlak">
                                {{ $selectQualities->height * $selectQualities->quantity }}m³
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="frame event" >
                <div class="frame-title">
                    <h2>Events loggings</h2> </div>
                <div class="log-console">
                    @foreach($eventlog as $eventlogs)
                        <p>{{ $eventlogs->action }}</p><p>{{ $eventlogs->sector }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="right">
            <div class="frame prime">
                <div class="frame-title">
                    <h2>Prime silo status</h2> </div>
                <div class="silo-group">
                    @foreach($primesilo as $silos)
                        <div class="silo-container">
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
                                <h4>{{ $silos->quantity }}</h4>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="cgps">

                <div class="frame recycle">
                    <div class="frame-title">
                        <h2>Recycle silo status</h2> </div>
                    <div class="silo-group">
                        @foreach($recyclesilo as $silos)
                            <div class="silo-container">
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

                                    <h4>{{ $silos->quantity }}</h4>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="frame rawmaterials">
                    <div class="frame-title">
                        <h2>Rawmaterials</h2> </div>
                    <div class="char">
                        <div class="pieID pie"> </div>
                    </div>
                    <ul class="pieID legend">
                        @foreach($rawmaterial as $rawmaterials)
                            <li> <em>{{ $rawmaterials->type }}</em> <span>{{ $rawmaterials->quantity }}</span> </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </body>
    <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript">

        function sliceSize(dataNum, dataTotal) {
            return (dataNum / dataTotal) * 360;
        }

        function addSlice(sliceSize, pieElement, offset, sliceID, color) {
            $(pieElement).append("<div class='slice " + sliceID + "'><span></span></div>");
            var offset = offset - 1;
            var sizeRotation = -179 + sliceSize;
            $("." + sliceID).css({
                "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
            });
            $("." + sliceID + " span").css({
                "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)"
                , "background-color": color
            });
        }

        function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
            var sliceID = "s" + dataCount + "-" + sliceCount;
            var maxSize = 179;
            if (sliceSize <= maxSize) {
                addSlice(sliceSize, pieElement, offset, sliceID, color);
            }
            else {
                addSlice(maxSize, pieElement, offset, sliceID, color);
                iterateSlices(sliceSize - maxSize, pieElement, offset + maxSize, dataCount, sliceCount + 1, color);
            }
        }

        function createPie(dataElement, pieElement) {
            var listData = [];
            $(dataElement + " span").each(function () {
                listData.push(Number($(this).html()));
            });
            var listTotal = 0;
            for (var i = 0; i < listData.length; i++) {
                listTotal += listData[i];
            }
            var offset = 0;
            var color = [
                "cornflowerblue"
                , "olivedrab"
                , "orange"
                , "tomato"
                , "crimson"
                , "purple"
                , "turquoise"
                , "forestgreen"
                , "navy"
                , "gray"
            ]}
   </script>
    @endsection