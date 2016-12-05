@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
        <link rel="stylesheet" href="/css/block-style.css">
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

                        <div class="form-group" id="groupHeight">
                            <label for="textHeight" class="control-label col-sm-2">Height:</label>
                            <div class="col-sm-10">
                                <select name="textHeight" id="textHeight">
                                    <option class="form-control" id="textHeight" name="textHeight" value="4">4m</option>
                                    <option class="form-control" id="textHeight" name="textHeight" value="6">6m</option>
                                    <option class="form-control" id="textHeight" name="textHeight" value="8">8m</option>
                                </select>
                            </div>
                        </div>

                        <input type="checkbox" name="checkboxHeight" id="checkboxHeight" value="1" class="checkbox" ><p>custom height</p>


                       <div class="form-group" id="groupCustomHeight" style="display: none">
                            <label for="textCustomHeight" class="control-label col-sm-2">Custom height:</label>
                            <div class="col-sm-10">
                                <input type="number" step="0.1" min=0 class="form-control" id="textCustomHeight" name="textCustomHeight" value="0">
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

    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="/js/block.js"></script>
@endsection