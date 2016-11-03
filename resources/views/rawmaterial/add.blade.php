@extends('layouts.master')

@section('content')

@if(session( 'message' ))
    <div class="alert-succes">{{session('message')}}</div>
@endif
<div class="container">
    <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Add new raw material</h3>
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
                      <label for="textQuantity" class="control-label col-sm-2">Quantity</label>
                        <div class="col-sm-10">
                         <input type="int" class="form-control" name="textQuantity" id="textQuantity" placeholder="25" required="">
                        </div>
                    </div>

                    <div class="form-group">
                     <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                        <div class="text-left col-sm-10">
                           <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Add raw material</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
