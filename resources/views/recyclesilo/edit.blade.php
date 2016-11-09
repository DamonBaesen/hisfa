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
                <h3>Edit silo</h3>
                <form class="form-horizontal" role="form" method="POST" action="">
                    {{ csrf_field() }}

                    @foreach ($recyclesilo as $silos) 
                    <div class="form-group">
                        <label for="textName" class="control-label col-sm-2">Silonr°:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtMaterial" name="txtName" placeholder="3" value="{{$silos->id}}" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtHardheid" class="control-label col-sm-2">Hardness:</label>
                        <div class="col-sm-10">
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
                    </div>

                    <div class="form-group">
                        <label for="txtHoeveelheid" class="control-label col-sm-2">Quantity:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="txtQuantity" min="0" max="100" name="txtHoeveelheid" value="{{$silos->quantity}}" required="">
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

