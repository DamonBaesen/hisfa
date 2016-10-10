@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Account</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                       <div class="form-group">
  <label for="textName" class="control-label col-sm-2">Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="textName" placeholder="Tom" required="">
    
  </div>
</div>
<!-- Text input http://getbootstrap.com/css/#forms -->
<div class="form-group">
  <label for="textPassword" class="control-label col-sm-2">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control" id="textPassword" placeholder="******" required="">
    
  </div>
</div>
<!-- Text input http://getbootstrap.com/css/#forms -->
<div class="form-group">
  <label for="textEmail" class="control-label col-sm-2">Email</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="textEmail" placeholder="tom@exemple.com" required="">
    
  </div>
</div>
<!-- File Button http://getbootstrap.com/css/#forms -->
<div class="form-group">
  <label for="filePicture" class="control-label col-sm-2">Picture</label>
  <div class="col-sm-10">
  <input type="file" id="filePicture" name="filePicture" required="">
  
  </div>
</div>
<!-- Button http://getbootstrap.com/css/#buttons -->
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
    </div>
</div>
@endsection
