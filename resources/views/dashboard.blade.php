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
            <div class="stock">
                <div class="btn-group stock-menu">
                    <button type="button" class="btn dashboard-stock-select-btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> P15 </button>
                    <div class="dropdown-menu">
                        @foreach ($qualities as $qualitylist)
                            <a class="dropdown-item" href="#">{{ $qualitylist->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="stock-blocks">
                    @foreach($stock as $stocks)
                        <div class="block">
                            <h4>{{ $stocks->height }}m</h4>
                            <h2>{{ $stocks->quantity }}</h2>
                            <p>blocks</p>
                            <span class="tag tag-default tag-pill pull-xs-center">{{ $stocks->height * $stocks->quantity }}m³</span>
                        </div>
                    @endforeach


                </div>

            </div>
            <div class="event-log" >
                <h5>Event log</h5>
                <div class="log-console">
                    <p>damon at net een pizza</p>
                    <p>damon gaat nog eens voor een pizza</p>
                    <p>damon neemt het pizza buffet</p>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="cgp">
                <h5>Prime silo</h5>
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
                            <h3>{{ $silos->quantity }}%</h3>
                            <p>{{$silos->type}}</p>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="cgps">
                <div class="cgr">
                    <h5>Recycle silo</h5>
                    <div class="silo-stats">
                        @foreach($recyclesilo as $silos)
                            <div class=silo-stats-stat>
                                @if( $silos->quantity < 50)
                                    <progress class="progress progress-success" value="{{ $silos->quantity }}" max="100"></progress>
                                @elseif($silos->quantity < 90)
                                    <progress class="progress progress-warning" value="{{ $silos->quantity }}" max="100"></progress>
                                @else
                                    <progress class="progress progress-danger" value="{{ $silos->quantity }}" max="100"></progress>
                                @endif
                                <h4>{{ $silos->id }}</h4>
                                <h3>{{ $silos->quantity }}%</h3>
                                <p></p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="cgg">
                    <h5>Resources</h5>
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
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="canvasjs-1.9.2/jquery.canvasjs.min.js"></script>
    <script src="canvasjs-1.9.2/canvasjs.min.js"></script>

@endsection