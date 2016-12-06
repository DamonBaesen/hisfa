@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Edit primesilo</title>
        <link rel="stylesheet" href="/css/formAdd-style.css">
    </head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="formEdit" >
                <h1>Primesilo</h1>
                <h3>Edit</h3>
                <form class="form-horizontal" role="form"  id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}

                    @foreach ($primesilo as $silos)
                    <div class="form-group">
                        <label for="txtGrondstof" class="control-label col-sm-2">Rawmaterial:</label>
                        <div class="col-sm-10">
                            <select name="txtGrondstof" id="txtGrondstof">
                                @foreach($rawmaterial as $rawmaterials)
                                    @if($rawmaterials->type == "")
                                        @else
                                    @if($rawmaterials->type == $silos->grondstof->type)
                                    <option class="form-control" selected id="txtMaterial" name="txtMaterial" value="{{$rawmaterials->id}}">{{$rawmaterials->type}}</option>

                                        @else
                                        <option class="form-control" id="txtMaterial" name="txtMaterial" value="{{$rawmaterials->id}}">{{$rawmaterials->type}}</option>
                                    @endif
                                    @endif
                                        @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="textName" class="control-label col-sm-2">Silonr°:</label>
                        <div class="col-sm-10">
                            <input type="number" min=1 class="form-control" id="txtMaterial" name="txtName" placeholder="3" value="{{$silos->id}}" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtHoeveelheid" class="control-label col-sm-2">Quantity:</label>
                        <div class="col-sm-10">
                            <input type="range" onchange="myFunction()" class="form-control" id="txtQuantity" min="0" max="100" name="txtHoeveelheid" value="{{$silos->quantity}}" required="">
                        <h1 id="inhoudSilo"></h1>
                        </div>
                    </div>

                    @endforeach


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                        <div class="text-left col-sm-10">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Save silo</button>
                        </div>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<script>
    function myFunction() {
        var x = document.getElementById("txtQuantity").value;
        document.getElementById("inhoudSilo").innerHTML = x;
    }

    $(document).ready(function() {
        var x = document.getElementById("txtQuantity").value;
        document.getElementById("inhoudSilo").innerHTML = x;
    });
</script>

