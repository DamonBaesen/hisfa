@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Edit rawmaterial</title>
        <link rel="stylesheet" href="/css/formAdd-style.css">

    </head>
        <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Add icon to rawmaterial</h3>
                    @foreach ($rawmaterials as $rawmaterial)
                        <form enctype="multipart/form-data" action="/rawmaterial/updatephoto/{{$rawmaterial->id}}" method="POST">
                            <input type="file" name="icon">
                            <input type="hidden" id="iconInput" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>

                    @endforeach
                <h3>Edit rawmaterial</h3>
                <form class="form-horizontal" role="form" method="POST" action="">
                    @foreach ($rawmaterials as $rawmaterial)
                    {{ csrf_field() }}
                    <fieldset>

                    <div class="form-group">
                        <label for="textType" class="control-label col-sm-2">Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="textType" name="textType" placeholder="P50" value="{{$rawmaterial->type}}" required="">
                        </div>
                        </div>
                        
                    <div class="form-group">
                        <label for="textStock" class="control-label col-sm-2">Stock</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="textStock" name="textStock" value="{{$rawmaterial->stock}}" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="textOrderd" class="control-label col-sm-2">Ordered</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="textOrderd" name="textOrderd" value="{{$rawmaterial->orderd}}" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="textDeliverd" class="control-label col-sm-2">Delivered</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="textDeliverd" name="textDeliverd" value="{{$rawmaterial->deliverd}}" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="checkUsing" class="control-label col-sm-2">Using</label>
                        <div class="col-sm-10">
                            <input type="checkbox" class="form-control" id="checkUsing" name="checkUsing" value="1" > Yes
                            <input type="checkbox" class="form-control" id="checkUsing" name="checkUsing" value="0" > No
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                        <div class="text-left col-sm-10">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Save material</button>
                        </div>
                    </div>
                    </fieldset>
                        @endforeach
                </form>
            </div>
        </div>
@endsection