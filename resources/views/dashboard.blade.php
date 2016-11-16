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
                <div class="stock-group" onclick="window.location.href='/block'">
                    @foreach($selectQuality as $selectQualities)
                        <div class="stock-container">
                            <h2>{{ $selectQualities->height }}</h2>
                            <h3>{{ $selectQualities->quantity }}</h3>
                            <p>blocks</p>
                            <div class="oppervlak">
                                {{ $selectQualities->height * $selectQualities->quantity *1.03 *1.29 }}m³
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="frame event" onclick="window.location.href='/history'" >
                <div class="frame-title">
                    <h2>Events loggings</h2> </div>
                <div class="log-console">
                    @foreach($eventlog as $eventlogs)
                        @if (!empty($eventlogs->silonr))
                        <p>{{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->silonr}}</p>
                        @elseif(!empty($eventlogs->block))
                            <p>{{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->block}}</p>
                       @elseif(!empty($eventlogs->quality))
                            <p>{{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->quality}}</p>
                            @elseif(!empty($eventlogs->rawmaterial))
                            <p>{{$eventlogs->gebruiker->name}} {{ $eventlogs->action }} {{$eventlogs->sector}} {{$eventlogs->rawmaterial}}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="right">
            <div class="frame prime" >
                <div class="frame-title">
                    <h2>Prime silo status</h2> </div>
                <div class="silo-group">
                    @if(count($primesilo) > 0)
                    @foreach($primesilo as $silos)
                        <div class="silo-container" onclick="window.location.href='/silo'">
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
                        </div>
                    @endforeach
                        @else
                             <a href="" class="imgAddIcoon"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                    @endif
                </div>
            </div>
            <div class="cgps">

                <div class="frame recycle" >
                    <div class="frame-title">
                        <h2>Recycle silo status</h2> </div>
                    <div class="silo-group">
                        @if(count($recyclesilo) > 0)
                        @foreach($recyclesilo as $silos)
                            <div class="silo-container" onclick="window.location.href='/recyclesilo'">
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
                                    <h3>{{ $silos->type }}</h3>
                                    <h4>{{ $silos->quantity }}%</h4>
                                </div>
                            </div>
                        @endforeach
                            @else
                                   <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        @endif

                    </div>
                </div>
                <div class="frame rawmaterials" >
                    <div class="frame-title">
                        <h2>Rawmaterials</h2> </div>
                    <div class="char">
                        <div class="pieID pie"> </div>
                    </div>
                    <ul class="pieID legend">
                        @if(count($rawmaterial) > 0)
                        @foreach($rawmaterial as $rawmaterials)
                            @if($rawmaterials->stock != 0)
                                <li onclick="window.location.href='/rawmaterial'"> <em>{{ $rawmaterials->type }}</em> <span>{{ $rawmaterials->stock }}</span>ton </li>
                            @endif
                        @endforeach
                            @else
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        @endif
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
            if (sliceSize <= 0) {

            }
            else {
                $("." + sliceID).css({
                    "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
                });
                $("." + sliceID + " span").css({
                    "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)"
                    , "background-color": color
                });
            }
        }

        function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
            var sliceID = "s" + dataCount + "-" + sliceCount;
            var maxSize = 179;
            if(sliceSize <= 0)
            {

            }
            else if (sliceSize <= maxSize) {
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
            ];
            for (var i = 0; i < listData.length; i++) {
                var size = sliceSize(listData[i], listTotal);
                iterateSlices(size, pieElement, offset, i, 0, color[i]);
                $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
                offset += size;
            }
        }
        createPie(".pieID.legend", ".pieID.pie");
   </script>
    @endsection