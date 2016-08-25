@extends('login.layouts.master')

@section('title', 'Welcome to MasterAssist')

@section('content')
  <div class="container-fluid intro">
      <div class="btngrp" style="position:fixed;top:15px;right:15px;display:inline-flex;">
        <button type="button" class="btn btn-default btnreglogin" data-toggle="modal" data-target="#RegModal">REGISTER</button>
        <button type="button" class="btn btn-default btnreglogin" data-toggle="modal" data-target="#LoginModal" style="">LOGIN</button>
      </div>
      <h1 class="introhead">MASTER ASSIST<h2>
      
    </div>

    <div class="container-fluid aboutcontainer">
      
    </div>


    <div id="RegModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" >
       
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" >REGISTER</h4>
      </div>
      <div class="modal-body" >
        <form action="{{ route('register') }}" method="POST">
          <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control"  id="password">
          </div>
          <div class="form-group">
            <input type="password" name="r_password" placeholder="Retype Password" class="form-control" id="confirm_password">
          </div>
          <div>
            <button type="submit" class="btn btn-primary" style="margin-left: 87%;border-radius: 0px;">Register</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </div>
        </form>
      </div>
      
    </div>

  </div>
</div>

 <div id="LoginModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body">
          <form action="{{ route('login') }}" method="POST">
          <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
          </div>
          <div>
            <button type="submit" class="btn btn-primary" style="margin-left: 87%;border-radius:0px;">Log In</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </div>
        </form>
      </div>
      
    </div>

  </div>
</div>

<script type="text/javascript">
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
    $('#confirm_password').addClass('error');
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
@endsection