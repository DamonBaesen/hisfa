@extends('layouts.master')

@section('content')

@if(session( 'message' ))
    <div class="alert-succes">{{session('message')}}</div>
@endif
<head>
    <meta charset="UTF-8">
    <title>Add rawmaterial | HISFA</title>
    <link rel="stylesheet" href="/css/formAdd-style.css">
</head>
    <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Add new rawmaterial</h3>
                 <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}
                <fieldset>

                    <div class="form-group">
                      <label for="textType" class="control-label col-sm-2">Type</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="textType" id="textType" placeholder="P50" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="textStock" class="control-label col-sm-2">Stock</label>
                        <div class="col-sm-10">
                            <input type="number" value="0" min=0 class="form-control" id="textStock" name="textStock" placeholder="10" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="textOrderd" class="control-label col-sm-2">Ordered</label>
                        <div class="col-sm-10">
                            <input type="number" value="0" min=0 class="form-control" id="textOrderd" name="textOrderd" placeholder="10" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="textDeliverd" class="control-label col-sm-2">Delivered</label>
                        <div class="col-sm-10">
                            <input type="number" value="0" min=0 class="form-control" id="textDeliverd" name="textDeliverd" placeholder="10" required="">
                        </div>
                    </div>
                    

                    <div class="form-group">
                           <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Add raw material</button>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection

