@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/quality-style.css">
        <title>Add quality | HISFA</title>
    </head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="formEdit">
                <h1>Add new quality</h1>
                
                <form class="form-horizontal" role="form" id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}
                   
                    <div class="addTotal">
                        <label for="textName">Name:</label>
                            <input type="text" id="textName" name="textName" required="" placeholder="P15">
                    </div>

                    <div class="addTotal">
                        <label for="textHardness" >Hardness:</label>
                            <select name="textHardness" id="textHardness">
                                <option value="Soft">Soft</option>
                                <option value="Medium">Medium</option>
                                <option value="Hard">Hard</option>
                            </select>
                    </div> 
               
                    
                    <div class="form-group">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
