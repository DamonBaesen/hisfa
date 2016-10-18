@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Quality overview</h3>
                   @foreach ( $inhoud as $kwaliteit )
                   @endforeach
                <hr/>
                <div id="blockMenu" >
                    <a href="{{ url('/block/add') }}">Add block</a>
                </div>

            </div>
        </div>
     </div>
@endsection