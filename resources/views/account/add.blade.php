
@extends('layouts.guest')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
    </head>
<div class="container">
    <div class="row">
            <div class="panel panel-default" id="form">
                <h1>HISFA</h1>
                <h3>Add new account</h3>
                 <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}
                    <fieldset>
                    <div class="form-group">
                      <label for="textName" class="control-label col-sm-2">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="textName" name="textName" placeholder="Tom" required="">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="textPassword" class="control-label col-sm-2">Password</label>
                        <div class="col-sm-10">
                         <input type="password" class="form-control" id="textPassword" name="textPassword" placeholder="******" required="">
                        </div>
                    </div>
                    <div class="form-group">
                     <label for="textEmail" class="control-label col-sm-2">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="textEmail" name="textEmail" placeholder="tom@exemple.com" required="">
                        </div>
                    </div>
                    <div class="form-group">
                     <label for="filePicture" class="control-label col-sm-2">Picture</label>
                        <div class="col-sm-10">
                              <input type="file" name="filePicture">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>
                    <div class="form-group">
                     <label class="control-label col-sm-2" for="CreateAccountbutton"></label>
                        <div class="text-left col-sm-10">
                           <button type="submit" id="CreateAccountbutton" name="CreateAccountbutton" class="btn btn-primary" aria-label="">Create</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
