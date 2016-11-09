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
                <h3>Add new quality</h3>
                <form class="form-horizontal" role="form" method="POST" action="">
                    {{ csrf_field() }}
                    <fieldset>
                    
                   
                    <div class="form-group">
                        <label for="textName" class="control-label col-sm-2">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="textName" name="textName" required="" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="textHardness" class="control-label col-sm-2">Hardness:</label>
                        <div class="col-sm-10">
                            <select name="textHardness" id="textHardness">
                                <option value="Soft">Soft</option>
                                <option value="Medium">Medium</option>
                                <option value="Hard">Hard</option>
                            </select>
                        </div>
                    </div> 
               
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                        <div class="text-left col-sm-10">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Add quality</button>
                        </div>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
