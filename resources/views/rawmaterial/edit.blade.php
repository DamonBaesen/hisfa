@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Edit rawmaterial | HISFA</title>
        <link rel="stylesheet" href="/css/formAdd-style.css">

    </head>
        <div class="row">
            <div class="panel panel-default" id="formEdit">
                @foreach ($rawmaterials as $rawmaterial)
                    <h1>Add icon to rawmaterial</h1>
                    <form enctype="multipart/form-data" id="editInBlock" action="/rawmaterial/updatephoto/{{$rawmaterial->id}}" method="POST">

                        <div class="form-group">
                            <div class="text-left col-sm-10">
                                <input type="file" name="icon">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                            <div class="text-left col-sm-10">
                                <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Change picture</button>
                            </div>
                        </div>
                    </form>

                @endforeach
                </div>

            <div class="panel panel-default" id="formEdit">
                <form class="form-horizontal" id="editInBlock" role="form" method="POST" action="">
                    <h1>Edit rawmaterial</h1>
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
                            <input type="number" min=0 class="form-control" id="textStock" name="textStock" value="{{$rawmaterial->stock}}" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="textOrderd" class="control-label col-sm-2">Ordered</label>
                        <div class="col-sm-10">
                            <input type="number" min=0 class="form-control" id="textOrderd" name="textOrderd" value="{{$rawmaterial->orderd}}" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="textDeliverd" class="control-label col-sm-2">Delivered</label>
                        <div class="col-sm-10">
                            <input type="number" min=0 class="form-control" id="textDeliverd" name="textDeliverd" value="{{$rawmaterial->deliverd}}" required="">
                        </div>
                    </div>


                            <div class="form-group" style="width: 250px; margin-left: auto; margin-right: auto; text-align: center">
                                @if($rawmaterial->using == 0)
                                    <label for="textUsing" class="control-label col-sm-2"></label>
                                    <div class="col-sm-10">
                                <input type="checkbox" id="textUsing" value={{$rawmaterial->using}} name="textUsing"> Using
                               </div>
                                    @else
                                    <label for="textUsing" class="control-label col-sm-2"></label>
                                        <div class="col-sm-10" >
                                            <input type="checkbox" id="textUsing" value={{$rawmaterial->using}} name="textUsing" checked="checked"> Using
                                           </div>
                                                @endif
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