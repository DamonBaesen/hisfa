@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/quality-style.css">
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
                
                <form class="form-horizontal" role="form" id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}
                    
                    @foreach ($qualities as $qualitie)
                    <div class="editTotal">
                        <label for="textName">Name:</label>
                        <input type="text" id="textName" name="textName" required="" value="{{$qualitie->name}}">
                        
                    </div>

                    <div class="editTotal">
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
                    
                    <div class="form-group">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary">Save </button>
                    
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection