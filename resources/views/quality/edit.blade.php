@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/form-edit-style.css">
    <title>Edit quality | HISFA</title>
</head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default"  id="formEdit">
                <h1>Edit quality</h1>
                <h3>
                    @foreach($qualities as $q)
                        {{$q->name}}
                    @endforeach
                </h3>
                
                <form class="editForm" role="form" id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}
                    
                    @foreach ($qualities as $qualitie)
                    <div class="totalEdit">
                        <label for="textName">Name:</label>
                        <input type="text" id="textName" name="textName" required="" value="{{$qualitie->name}}">
                        
                    </div>

                    <div class="totalEdit">
                        <label for="textHardness" >Hardness:</label>
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
                    
                  @endforeach
                    
                    <div class="totalEdit">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary">Save </button>
                    
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection