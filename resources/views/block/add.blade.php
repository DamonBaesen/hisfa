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
                @foreach($quality as $q)
                
                <h3>Add new {{$q->name}}</h3>
                
                <form class="form-horizontal" role="form" method="POST" action="">
                    {{ csrf_field() }}
                    <fieldset>
                      
                       <div class="form-group" hidden="hidden">
                            <label for="textQuality" class="control-label col-sm-2">Quantity:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="textQuality" name="textQuality" required="" value="{{$q->id}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textQuantity" class="control-label col-sm-2">Quantity:</label>
                            <div class="col-sm-10">
                                <input type="number" min=0  class="form-control" id="textQuantity" name="textQuantity" required="" value="">
                            </div>
                        </div>
               
                       <div class="form-group">
                            <label for="textQuantity" class="control-label col-sm-2">Height:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="textHeight" name="textHeight" required="" value="">
                            </div>
                        </div>
                
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                        <div class="text-left col-sm-10">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Add block</button>
                        </div>
                    </div>
                    </fieldset>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection