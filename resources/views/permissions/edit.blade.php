@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
        <link rel="stylesheet" href="/css/permissions-style.css">
    </head>
        <div class="row">
            <div class="panel panel-default" id="form">

                <form class="permission-frame form-horizontal" role="form" method="POST" action="">
                    {{ csrf_field() }}
                <div class="user-info">
                @foreach ($userData as $user)
                        <img src="../../uploads/avatars/{{$user->foto}}" alt="">
                        <h3>{{ $user->name }}</h3>
                @endforeach
                </div>

                    @foreach ($permissionDetail as $detail)
                        <input type="hidden" value="{{ $i=false }}">
                        @foreach ($permissionData as $permission)
                            @if($permission->permission_id == $detail->id)
                                <div class="permission-checkbox">
                                    <input  type="checkbox" id="{{ $detail->name }}" name="{{ $detail->name }}" checked> <p> {{ $detail->name }} </p>
                                </div>
                                <input type="hidden" value="{{ $i=true }}">
                            @endif
                        @endforeach

                        @if($i == false)
                            <div class="permission-checkbox">
                                <input  type="checkbox" id="{{ $detail->name }}" name="{{ $detail->name }}"> <p> {{ $detail->name }} </p>
                            </div>
                                @endif

                    @endforeach

                    <div class="form-group">
                        <label class="control-label" for="CreateMaterialbutton"></label>
                        <div class="permission-btn">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">Save permissions</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection