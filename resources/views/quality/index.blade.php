@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Quality overview</h3>
                  @foreach ($data as $qualities)
                       <li>
                            <p>Quality: {{ $qualities->name }}, hardness: {{ $qualities->hardness }}</p>
                            <a href="/quality/remove/{{$qualities->id}}">Delete</a>
                            <a href="/quality/edit/{{$qualities->id}}">Edit</a>
                       </li>
                @endforeach
                <hr/>
                <div id="blockMenu" >
                    <a href="{{ url('/quality/add') }}">Add quality</a>
                </div>

            </div>
        </div>
     </div>
@endsection