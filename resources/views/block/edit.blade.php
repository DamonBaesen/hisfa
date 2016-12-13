@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/form-edit-style.css">
        <title>Edit block | HISFA</title>
    </head>
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="formEdit">
                <h1>Edit block</h1>
                <h3>
                    @foreach($quality as $q)
                        {{$q->name}} of
                    @endforeach

                    @foreach($block as $b)
                        {{$b->height}}m
                        @endforeach
                </h3>

                <form class="editForm" role="form" id="editInBlock" method="POST" action="">
                        {{ csrf_field() }}      
                    <div class="totalEdit">    
                        <h4 id="currentQuantity">
                            Quantity now:
                            @foreach($block as $b)
                                {{$b->quantity}}
                            @endforeach
                        </h4>
                    </div>

                    <div class="totalEdit" >
                        <label 
                            for="textChoise" >Operation:
                        </label>
                        <select name="textChoise" id="textChoise">
                            <option id="textChoise" selected value="Add">Add</option>
                            <option id="textChoise" value="Delete">Delete</option>
                        </select>
                    </div>
                
                    <div class="totalEdit">
                        <label  
                            for="textQuantity">Quantity:
                        </label>
                            <input type="number" min=0 class="form-control" id="textQuantity" name="textQuantity" required="" value="">
                    </div>

                    <div class="totalEdit" >
                        <button type="submit" id="CreateQuantitybutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection