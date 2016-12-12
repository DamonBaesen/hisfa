@extends('layouts.master')

@section('content')

@if(session( 'message' ))
    <div class="alert-succes">{{session('message')}}</div>
@endif
<head>
    <meta charset="UTF-8">
    <title>Add rawmaterial | HISFA</title>
    <link rel="stylesheet" href="/css/form-add-style.css">
</head>
   <div class="container">
    <div class="row">
            <div class="panel panel-default" id="formAdd">
                <h1>Add</h1>
                <h3>rawmaterial</h3>
                 <form class="addForm" role="form" method="POST" action="">
                        {{ csrf_field() }}
                <fieldset>

                    <div class="totalAdd">
                        <label for="textType">
                            Type:
                        </label>
                        <input type="text" class="form-control" name="textType" id="textType" placeholder="P50" required="">
                    </div>
                    
                    <div class="totalAdd">
                        <label for="textStock">
                           Stock:
                        </label>
                        <input type="number" value="0" min=0 class="form-control" id="textStock" name="textStock" placeholder="10" required="">
                    </div>
                    
                    <div class="totalAdd">
                        <label for="textOrderd">
                            Ordered:
                        </label>
                        <input type="number" value="0" min=0 class="form-control" id="textOrderd" name="textOrderd" placeholder="10" required="">
                    </div>
                    
                    <div class="totalAdd">
                        <label for="textDeliverd" >
                            Delivered:
                        </label>
                        <input type="number" value="0" min=0 class="form-control" id="textDeliverd" name="textDeliverd" placeholder="10" required="">
                    </div>
                    
                    <div class="totalAdd">
                           <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">save</button>
                        </div>
                </fieldset>
            </form>
        </div>
   </div>
     </div>
@endsection

