@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Edit primesilo | HISFA</title>
        <link rel="stylesheet" href="/css/form-edit-style.css">
    </head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="formEdit" >
                <h1>Edit primesilo</h1>
                <h3>
                    @foreach($primesilo as $p)
                        {{$p->id}}
                    @endforeach
                </h3>
                
                <form class="editForm" role="form"  id="editInForm" method="POST" action="">
                    {{ csrf_field() }}

                    @foreach ($primesilo as $silos)
                    <div class="totalEdit">
                        <label for="txtGrondstof" >Rawmaterial:</label>
                        
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

                    <div class="totalEdit">
                        <label for="textName">Silonr°:</label>
                        
                            <input type="number" min=1 class="form-control" id="txtMaterial" name="txtName" placeholder="3" value="{{$silos->id}}" required="">
                    </div>

                    <div class="totalEdit">
                        <label for="txtHoeveelheid" id=slider>Quantity:</label>
                            <input type="range" onchange="myFunction()" class="form-control" id="txtQuantity" min="0" max="100" name="txtHoeveelheid" value="{{$silos->quantity}}" required="">
                        <h1 id="inhoudSilo"></h1>
                    </div>
        

                    @endforeach


                    <div class="totalEdit">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Save
                            </button>
                    </div>
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

