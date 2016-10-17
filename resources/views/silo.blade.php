@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Silo overview</h3>

                <ul>
                @foreach ($primesilo as $silos)
                    <li>
                        <a href="/silo/edit/{{$silos->id}}">
                        <p>SILO {{ $silos->id }} </p>
                    <p> {{ $silos->quantity }} %</p>
                        </a>
                    <a href="/silo/remove/{{$silos->id}}">Verwijder silo {{$silos->id}}</a>
                    </li>
                @endforeach

                </ul>
              <hr/>
              <div id="siloMenu" >
                <a href="{{ url('/silo/add') }}">Add silo</a>
              </div>

    </div>
</div>
@endsection
