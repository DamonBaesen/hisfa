@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Add primesilo | HISFA</title>
        <link rel="stylesheet" href="/css/form-add-style.css">
    </head>
        <div class="container">

        <div class="row">
            <div class="panel panel-default" id="formAdd">
                <h1>Add</h1>
                <h3>primesilo</h3>
                
                <form class="addForm" role="form" id="addInForm" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="totalAdd">
                        <label for="textName">Silonr°:</label>
                        <input type="number" min=1 class="form-control" id="textName" name="textName" placeholder="1" required="">
                    </div>
            
                    <div class="totalAdd">
                        <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">save
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </div>
@endsection

