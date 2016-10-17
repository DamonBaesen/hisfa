@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Block overview</h3>

                <ul>


                </ul>
                <hr/>
                <div id="siloMenu" >
                    <a href="{{ url('/silo/add') }}">Add block</a>
                </div>

            </div>
        </div>
@endsection
