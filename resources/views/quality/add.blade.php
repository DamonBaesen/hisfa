@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/form-add-style.css">
        <title>Add quality | HISFA</title>
    </head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="formAdd">
                <h1>Add</h1>
                <h3>Quality</h3>

                <form class="addForm" role="form" id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}

                    <div class="totalAdd">
                        <label for="textName">Name:</label>
                        <input style="border: none" type="text" id="textName" name="textName" required="" placeholder="P15">
                    </div>

                    <div class="totalAdd">
                        <label for="textHardness" >Hardness:</label>
                        <select style="border: none" name="textHardness" id="textHardness">
                            <option value="Soft">Soft</option>
                            <option value="Medium">Medium</option>
                            <option value="Hard">Hard</option>
                        </select>
                    </div>


                    <div class="totalAdd">
                        <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
