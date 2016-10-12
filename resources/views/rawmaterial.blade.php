@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Overview raw materials</h3>
               

                <!--Hier komen de grafieken -->

              <hr/>
              <div id="siloMenu" >
                <a href="{{ url('/rawmaterial/add') }}">Add raw material</a> /
                <a href="{{ url('/rawmaterial/edit') }}">Edit raw material</a>
              </div>

    </div>
</div>
@endsection
