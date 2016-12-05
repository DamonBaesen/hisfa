@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/block-style.css">

    </head>
    <div class="silo-container">
                <div class="silo-title"><h1>Quality overview</h1></div>
                  @foreach ($data as $qualities)
                       <li>
                        <div class="block-total">
                            <h1>{{ $qualities->name }}</h1>
                            <p>Hardness: {{ $qualities->hardness }}</p>
                            <a href="/quality/remove/{{$qualities->id}}" id="delete">Delete</a>
                            <a href="/quality/edit/{{$qualities->id}}" id="edit">Edit</a>
                       </li>
                @endforeach
                <hr/>

            <h5 class="totalAll"><a href="{{ url('/quality/add') }}" id="addQuality">Add quality</a></h5>
        </div>
     </div>
@endsection