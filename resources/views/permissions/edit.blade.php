@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Edit Permissions | HISFA</title>
        <link rel="stylesheet" href="/css/account-style.css">
        <link rel="stylesheet" href="/css/permissions-style.css">
    </head>
    <div id="profile_page">
        <div class="profile">
        <div class="row">
            <div id="form">

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
                                    <input  type="checkbox" id="{{ $detail->name }}" name="{{ $detail->name }}" checked> <label> {{ $detail->name }} </label>
                                </div>
                                <input type="hidden" value="{{ $i=true }}">
                            @endif
                        @endforeach

                        @if($i == false)
                            <div class="permission-checkbox">
                                <input  type="checkbox" id="{{ $detail->name }}" name="{{ $detail->name }}"> <label> {{ $detail->name }} </label>
                            </div>
                                @endif

                    @endforeach

                    <div class="form-group">
                        <div class="permission-btn">
                            <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="profile_button" aria-label="">Save permissions</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    </div>
    </div>
@endsection