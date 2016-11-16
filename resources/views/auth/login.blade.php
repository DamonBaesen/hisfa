@extends('layouts.guest')

@section('content')

    <div class="container">
        <div class="row">
                    <h2>Login</h2>

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}


                                <label for="email" class="col-md-4 control-label">Email</label>
                                    <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <strong class="message">Inloggegevens incorrect</strong>
                                    </span>
                                    @endif


                                <label for="password" class="col-md-4 control-label">Wachtwoord</label>
                                    <input id="password" placeholder="Wachtwoord"type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                    <button type="submit">
                                        Login
                                    </button>

                                    <a class="forgot" href="{{ url('/password/reset') }}">
                                        Wachtwoord vergeten?
                                    </a>

                        </form>
    </div>
@endsection
