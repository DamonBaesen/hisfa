@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/block-style.css">
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


                <div id=input-label>

                    <form class="form-horizontal" role="form" id="editInBlock" method="POST" action="">
                        {{ csrf_field() }}
                        <h4>Quantity now:
                            @foreach($block as $b)
                                {{$b->quantity}}
                            @endforeach
                        </h4>
                        <div class="form-group" id="total">
                            <label for="textChoise" class="control-label col-sm-2">Quantity:
                            </label>
                            <div>
                                <select name="textChoise" id="textChoise">
                                    <option selected value="Add">Add</option>
                                    <option value="Delete">Delete</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="btnQuantity">
                            <label class="control-label col-sm-2" for="textQuantity">Quantity</label>

                            <input type="number" min=0 class="form-control" id="textQuantity" name="textQuantity" required="" value="">
                        </div>

                        <div class="form-group" id="btnQuantity">
                            <label class="control-label col-sm-2" for="CreateMaterialbutton"></label>
                            <div>
                                <button type="submit" id="CreateQuantitybutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection