@extends('layouts.guest')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
                <h2>Wachtwoord resetten</h2>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}


                            <label for="email" class="col-md-4 control-label">Email</label>
                                <input id="email" type="email" class="form-control password-reset" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                        <a class="forgot" href="{{ url('/login') }}">
                            Terug naar loginpagina
                        </a>
                    </form>

    </div>
</div>
@endsection
