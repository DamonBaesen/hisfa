@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <title>Edit rawmaterial | HISFA</title>
    <link rel="stylesheet" href="/css/form-edit-style.css">

    </head>
       <div class="container">
            <div class="row">
            <div class="panel panel-default" id="formEdit">
               <h1>Edit rawmaterial</h1>
               <h3>
                   Change picture
               </h3>
               
                @foreach ($rawmaterials as $rawmaterial)
                    <form class="editForm" enctype="multipart/form-data" id="editInBlock" action="/rawmaterial/updatephoto/{{$rawmaterial->id}}" method="POST">
                        {{ csrf_field() }}
                        <div class="totalEdit">
                           <label for="icon">
                               Choose picture:
                            </label>
                            <input type="file" name="icon" id=file>
                        </div>
                        
                        <div class="totalEdit">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">
                                save
                            </button>
                    
                        </div>
                    </form>
                    @endforeach
                </div>

            <div class="panel panel-default" id="formEdit">
               <h3>
                   @foreach($rawmaterials as $r)
                       {{$r->type}}
                   @endforeach
               </h3>
                <form class="editForm" id="editInBlock" role="form" method="POST" action="">
                    @foreach ($rawmaterials as $rawmaterial)
                    {{ csrf_field() }}
                    <fieldset>

                    <div class="totalEdit">
                        <label for="textType">
                           Type:
                        </label>
                        <input type="text" class="form-control" id="textType" name="textType" placeholder="P50" value="{{$rawmaterial->type}}" required="">
                    </div>
                     
                    <div class="totalEdit">
                        <label for="textStock">
                            Stock:
                        </label>
                        <input type="number" min=0 class="form-control" id="textStock" name="textStock" value="{{$rawmaterial->stock}}" required="">
                    </div>

                    <div class="totalEdit">
                        <label for="textOrderd">
                            Ordered:
                        </label>                            <input type="number" min=0 class="form-control" id="textOrderd" name="textOrderd" value="{{$rawmaterial->orderd}}" required="">
                    </div>
                    
                    <div class="totalEdit">
                        <label for="textDeliverd">
                            Delivered:
                        </label>
                        <input type="number" min=0 class="form-control" id="textDeliverd" name="textDeliverd" value="{{$rawmaterial->deliverd}}" required="">
                    </div>
                   
                    <div class="totalEdit">
                        <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Save 
                        </button>
                    </div>
                    </fieldset>
                        @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection