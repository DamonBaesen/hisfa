@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/block-style.css">
    </head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default"  id="formEdit">
                <h1>Quality</h1>
                <h3>Edit</h3>
                <form class="form-horizontal" role="form" id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}
                    <fieldset>
                    @foreach ($qualities as $qualitie)
                    <div class="form-group">
                        <label for="textName" class="control-label col-sm-2">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="textName" name="textName" required="" value="{{$qualitie->name}}">
                        </div>
                    </div>

                   
                    <div class="form-group">
                        <label for="textHardness" class="control-label col-sm-2">Hardness:</label>
                        <div class="col-sm-10">
                            <select name="textHardness" id="textHardness">
                               @if($qualitie->hardness == "Soft")
                                <option selected value="Soft">Soft</option>
                                @else
                                    <option value="Soft">Soft</option>
                                @endif

                                @if($qualitie->hardness == "Medium")
                                    <option selected value="Medium">Medium</option>
                                @else
                                    <option value="Medium">Medium</option>
                                @endif

                                @if($qualitie->hardness == "Hard")
                                    <option selected value="Hard">Hard</option>
                                @else
                                    <option value="Hard">Hard</option>
                                @endif
                            </select>
                        </div>
                    </div>
                  @endforeach
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                        <div class="text-left col-sm-10">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Save quality</button>
                        </div>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection