@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Edit recyclesilo | HISFA</title>
        <link rel="stylesheet" href="/css/form-edit-style.css">
    </head>
       <div class="container">
        <div class="row">
            <div class="panel panel-default" id="formEdit">
                <h1>Edit recyclesilo</h1>
                <h3>
                    @foreach ($recyclesilo as $r)
                        {{$r->id}}
                    @endforeach
                </h3>
                
                <form class="editForm" role="form" id="editiInForm" method="POST" action="">
                    {{ csrf_field() }}

                    @foreach ($recyclesilo as $silos) 
                    <div class="totalEdit">
                        <label for="textName">
                            Silonr°:
                        </label>
                        <input type="text" class="form-control" id="txtMaterial" name="txtName" placeholder="3" value="{{$silos->id}}" required="">
                    </div>

                    <div class="totalEdit">
                        <label for="txtHardheid">
                            Hardness:
                        </label>
                        <select name="txtHardheid" id="txtHardheid">
                            @if($silos->type == "Soft")
                                <option selected value="Soft">Soft</option>
                            @else
                                <option value="Soft">Soft</option>
                            @endif

                            @if($silos->type == "Medium")
                                <option selected value="Medium">Medium</option>
                            @else
                                <option value="Medium">Medium</option>
                            @endif

                            @if($silos->type == "Hard")
                                <option selected value="Hard">Hard</option>
                            @else
                                <option value="Hard">Hard</option>
                            @endif
                        </select>
                    </div>

                    <div class="totalEdit">
                        <label for="txtHoeveelheid" id="slider">
                            Quantity:
                        </label>
                        <input type="range" onchange="myFunction()" id="txtQuantity" min="0" max="100" name="txtHoeveelheid" value="{{$silos->quantity}}" required="">
                        <h1 id="inhoudSilo"></h1>
                    </div>
                    @endforeach


                    <div class="totalEdit">
                        <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">
                            Save 
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

