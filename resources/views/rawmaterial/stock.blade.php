@extends('layouts.master')

@section('content')
        <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Stock overview</h3>
                @foreach ($rawmaterial as $rawmaterials)
                <ul>
                    <li>
                       <h4>{{$rawmaterials->type}}</h4>
                        <label for="orderd">Besteld: {{$rawmaterials->orderd}}</label> <br>
                        <label for="deliverd">Geleverd: {{$rawmaterials->deliverd}}</label><br>
                        <label for="stock">Stock: {{$rawmaterials->stock}}</label><br>
                        <a href="/rawmaterial/edit/{{$rawmaterials->id}}" id="editRawmaterial">Edit</a>
                    </li>
                </ul>
                @endforeach

            </div>
        </div>
@endsection