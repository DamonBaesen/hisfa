@extends('layouts.master')

@section('content')


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

           
                <link rel="stylesheet" href="/css/materials-style.css">

<body>
    
    <div class="dash-container">
        <div class="config-stock">
            <h3>Configure rawmaterials</h3>
            
            <ul class="nav nav-tabs">
                  <li class="nav-item"> <a class="nav-link" href="/rawmaterial/add">Add new rawmaterial</a> </li>
            </ul>
            <div class="config-stock-view">                   

                <div class="select-blocks">

                <div class="cgg">
                    <div class="char">
                        <div class="pieID pie"> </div>
                    </div>
                </div>
            </div>
                    <ul class="pieID legend">
                       
                       @foreach ($rawmaterial as $rawmaterials)
                        <li> <em>{{ $rawmaterials->type }}</em></br> <span>{{ $rawmaterials->quantity }}</span></br>
                            <!--<input type="text" placeholder="50" class="form-control" name="block-quantity" id="inputQuantity">-->
                            <!--<button name="btn-add" id="addMaterial" class="btn btn-success">add</button></li> -->
                            <a href="/rawmaterial/remove/{{$rawmaterials->id}}" id="deleteRawmaterial">Delete {{$rawmaterials->id}}</a>
                            <a href="/rawmaterial/edit/{{$rawmaterials->id}}" id="editRawmaterial">Edit{{$rawmaterials->id}}</a>
                       @endforeach
                    </ul>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="canvasjs-1.9.2/jquery.canvasjs.min.js"></script>
<script src="canvasjs-1.9.2/canvasjs.min.js"></script>

</html>
@endsection
