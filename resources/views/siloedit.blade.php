@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
<<<<<<< HEAD
<<<<<<< HEAD
                <h3>Add new silo</h3>
=======
                <h3>Edit silo</h3>
>>>>>>> master
=======
                <h3>Edit silo</h3>
>>>>>>> master
                <form class="form-horizontal" role="form" method="POST" action="">
                    {{ csrf_field() }}

                    @foreach ($primesilo as $silos) 
                    <div class="form-group">
                        <label for="txtGrondstof" class="control-label col-sm-2">Rawmaterial:</label>
                        <div class="col-sm-10">
                            <select name="txtGrondstof" id="txtGrondstof">
<<<<<<< HEAD
<<<<<<< HEAD
                                @foreach($primesilos as $silo)
                                    <option class="form-control" id="txtMaterial" name="txtMaterial" value="{{$silo->rawmaterial_id}}">{{$silo->grondstof->type}}</option>
=======
                                @foreach($rawmaterial as $rawmaterials)
                                    <option class="form-control" id="txtMaterial" name="txtMaterial" value="{{$rawmaterials->id}}">{{$rawmaterials->type}}</option>
>>>>>>> master
=======
                                @foreach($rawmaterial as $rawmaterials)
                                    <option class="form-control" id="txtMaterial" name="txtMaterial" value="{{$rawmaterials->id}}">{{$rawmaterials->type}}</option>
>>>>>>> master
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="textName" class="control-label col-sm-2">Silonr°:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtMaterial" name="txtName" placeholder="3" value="{{$silos->id}}" required="">
                        </div>
                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> master

                    <div class="form-group">
                        <label for="txtHoeveelheid" class="control-label col-sm-2">Quantity:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="txtQuantity" min="0" max="100" name="txtHoeveelheid" value="{{$silos->quantity}}" required="">
                        </div>
                    </div>

<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
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

