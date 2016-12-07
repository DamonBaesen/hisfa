@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/block-style.css">
        <title>Quality | HISFA</title>
    </head>
    <div class="silo-container" id="qualityContainer">
                <div class="silo-title"><h1>Quality overview</h1></div>
        <ul class="qualityList">
        @foreach ($data as $qualities)
                       <li class="qualityList">
                        <div class="block-total">
                            <h1  >{{ $qualities->name }}</h1>
                            <p class="qualityHeader">Hardness: {{ $qualities->hardness }}</p>
                            <a href="/quality/remove/{{$qualities->id}}" id="delete">Delete</a>
                            <a href="/quality/edit/{{$qualities->id}}" id="edit">Edit</a>
                            </div>
                       </li>
                @endforeach
        </ul>
            <h5 class="totalAll"><a href="{{ url('/quality/add') }}" id="addQuality">Add quality</a></h5>
        </div>
     </div>
@endsection