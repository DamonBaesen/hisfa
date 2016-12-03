@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
    </head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                
                
                <h3>Add new 
                @foreach($quality as $q)
                {{$q->name}} of 
                @endforeach
                
                @foreach($block as $b)
                {{$b->height}} m
                </h3>
                
                <form class="form-horizontal" role="form" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="textQuantity" class="control-label col-sm-2">Quantity:</label>
                        <div class="col-sm-10">
                            <input type="number" min=0 class="form-control" id="textQuantity" name="textQuantity" required="" value="{{$b->quantity}}">
                        </div>
                    </div>
                  @endforeach  
                
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                        <div class="text-left col-sm-10">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Change quantity</button>
                        </div>
                    </div>
                    </fieldset>
                    
                </form>
            </div>
        </div>
    </div>
@endsection