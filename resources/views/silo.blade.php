@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Silo overview</h3>
               

                <!--Hier komen de grafieken -->

              <hr/>
              <div id="siloMenu" >
                <a href="{{ url('/silo/add') }}">Add silo</a> /
                <a href="{{ url('/silo/edit') }}">Edit silo</a>
              </div>

    </div>
</div>
@endsection
