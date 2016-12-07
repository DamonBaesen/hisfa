@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Add primesilo | HISFA</title>
        <link rel="stylesheet" href="/css/formAdd-style.css">
    </head>

        <div class="row">
            <div class="panel panel-default" id="formEdit">
                <h1>Primesilo</h1>
                <h3>Add new</h3>
                <form class="form-horizontal" role="form" id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="textName" class="control-label col-sm-2">Silonr°:</label>
                        <div class="col-sm-10">
                            <input type="number" min=1 class="form-control" id="textName" name="textName" placeholder="1" required="">
                        </div>
                    </div>

                    <div class="form-group">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Add new silo</button>
                    </div>
                </form>
            </div>
        </div>
@endsection

