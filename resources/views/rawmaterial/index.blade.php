@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Rawmaterial | HISFA</title>
    </head>

    <link rel="stylesheet" href="/css/master-style.css">
    <link rel="stylesheet" href="/css/materials-style.css">

    <body>

    <div class="raw-container">
        <h1>Rawmaterials</h1>
        @if(Session::has('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                {{ Session::get('message', '') }}
            </div>
        @endif
        <div class="raw-overview">

            @foreach ($rawmaterial as $rawmaterials)
                @if($rawmaterials->stock != 0)
                    <li>
                        <div class="raw-group">
                            <h3>{{ $rawmaterials->type }}</h3>

                            <img src="/uploads/rawmaterialicons/{{ $rawmaterials->icon }}" >

                            <p>
                                Stock:
                                <span>
                                    {{ $rawmaterials->stock }}
                                </span>
                                oct.
                            </p>

                            <p>
                                Ordered: {{$rawmaterials->orderd}} oct.
                            </p>
                            <p>
                                Delivered: {{$rawmaterials->deliverd}} oct.
                            </p>
                            <div class="line"></div>
                            @if($rawmaterials->using == 0)
                                <div class="checkbox">
                                    <input type="checkbox" name="using"  disabled> <p>Using</p>
                                </div>
                            @else
                                <div class="checkbox">
                                    <input type="checkbox" name="using" checked disabled> <p>Using</p>
                                </div>
                            @endif

                            <a href="/rawmaterial/edit/{{$rawmaterials->id}}" id="editRawmaterial">Edit</a>

                            <a href="/rawmaterial/remove/{{$rawmaterials->id}}" id="deleteRawmaterial">Delete</a>
                            @endif

                            @endforeach

                        </div>
                    </li>


        </div>



        <div class="addTotal">
            <a href="/rawmaterial/add"> +</a>
        </div>

    </div>

    </body>





@endsection
