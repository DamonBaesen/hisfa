@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/block-style.css">
        <title>Add block | HISFA</title>
    </head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default"  id="formEdit">
                <h1>Add new block</h1>
                @foreach($quality as $q)
                <h3>{{$q->name}}</h3>
                <form class="form-horizontal" role="form" id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}
                    
                    <fieldset>
                      
                       <div class="form-group totalAddBlock" hidden="hidden">
                            <label for="textQuality" >Quality:
                            </label>
                            <div>
                                <input type="text" class="form-control" id="textQuality" name="textQuality" required="" value="{{$q->id}}">
                            </div>
                        </div>
                        
                        <div class="form-group" >
                           <div class="totalAddBlock">
                            <label for="textQuantity" class="control-label col-sm-2">Quantity:</label>
                            <div>
                                <input type="number" min=0  class="form-control" id="textQuantity" name="textQuantity" required="" value="0">
                            </div>
                            </div>
                        </div>

                        <div class="form-group" id="groupHeight">
                           <div class="totalAddBlock"> 
                            <label for="textHeight" class="control-label col-sm-2">Height:</label>
                            <div>
                                <select name="textHeight" id="textHeight">
                                    <option class="form-control" id="textHeight" name="textHeight" value="4">4m</option>
                                    <option class="form-control" id="textHeight" name="textHeight" value="6">6m</option>
                                    <option class="form-control" id="textHeight" name="textHeight" value="8">8m</option>
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="groupCustomHeight" style="display: none">
                            <div class="totalAddBlock">
                                <label for="textCustomHeight" id="labelCustom" class="control-label col-sm-2">Height:</label>
                                <input type="number" step="0.1" min=0 class="form-control" id="textCustomHeight" name="textCustomHeight" value="0">
                            </div>
                        </div>

                        <div class="form-group" id="groupHeight">
                           <div class="totalAddBlock">
                            <label for="checkboxHeight" class="control-label col-sm-2">Custom height:</label>
                            <div>
                                <input type="checkbox" name="checkboxHeight" id="checkboxHeight" value="1" class="checkbox" >
                                </div>
                        </div>
                    </div>


                
                    <div class="form-group">
                        <div>
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