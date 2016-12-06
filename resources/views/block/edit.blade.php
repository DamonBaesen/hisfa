@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/block-style.css">
    </head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="formEdit">

                <h1>Edit block</h1>

                <h3>
                @foreach($quality as $q)
                {{$q->name}} of 
                @endforeach
                
                @foreach($block as $b)
                {{$b->height}}m
                </h3>
                
            <div id=input-label>
                <form class="form-horizontal" role="form" id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}
                    
                    <div class="form-group" id="total">
                        <label for="textQuantity" class="control-label col-sm-2">Quantity:
                        </label>
                        <div>
                            <input type="number" step="0.1" min=0 class="form-control" id="textQuantity" name="textQuantity" required="" value="{{$b->quantity}}">
                        </div>
                    </div>
                  @endforeach  
                
                    <div class="form-group" id="btnQuantity">
                        <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                        <div>
                            <button type="submit" id="CreateQuantitybutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">save</button>
                        </div>
                    </div>
                </form>
            </div> 
            </div>
        </div>
    </div>
@endsection